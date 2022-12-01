<?php


namespace Source\Models;


use Source\Core\Model;
use Source\Core\Session;
use Source\Core\View;
use Source\Supports\Email;

/**
 * Class Auth
 * @package Source\Models
 * Faz toda rotina de autenticação do usuário -:
 */
class Auth extends Model
{
    public function __construct()
    {
        parent::__construct("user", ["id"], ["email", "password"]);
    }

    public static function user(): ?User
    {
        $session = new Session();
        if(!$session->has("authUser")){
            return null;
        }

        return (new User())->findById($session->authUser);
    }

    public static function logout(): void
    {
        $session = new Session();
        $session->unset("authUser");
    }

    /**
     * @param User $user
     * @return bool
     */
    public function register(User $user): bool
    {

        if(!$user->save()){
            $this->message = $user->message;
            return false;
        }

        $view = new View(__DIR__ . "/../../themes/cardapio/restaurant/email");
        $message = $view->render("confirm", [
           "first_name" => $user->first_name,
           "confirm_link" => url("/obrigado/" . base64_encode($user->email))
        ]);

        (new Email())->bootstrap(
            "Ative sua conta no " . CONF_SITE_NAME,
            $message,
            $user->email,
            "{$user->first_name} {$user->last_name}"
        )->send();

        return true;
    }


    /**
     * Verificamos email valido
     * se save de dados foi selecionado pelo user
     *
     */
    public function login(string $email, string $password, bool $save = false): bool
    {
        if(!is_email($email)){
            $this->message->warning("O e-mail informado não é valido!");
            return false;
        }

        if($save){
            setcookie("authEmail", $email, time() + 604800, "/");
        }else{
            setcookie("authEmail", null, time() - 3600, "/");
        }

        if(!is_password($password)){
            $this->message->warning("A senha informada não é valida!");
            return false;
        }

        $user =  (new User())->findByEmail($email);

        if(!$user){
            $this->message->error("O e-mail informado já foi registrado!");
            return false;
        }

        if(!passwd_verify($password, $user->password)){

            $this->message->error("A senha informada não confere!!");
            return false;
        }

        if(password_rehash($user->password)){
            $user->password = $password;
            $user->save();
        }

        //LOGIN
        (new Session())->set("authUser", $user->id);
        $this->message->success("Login efetuado com sucesso")->flash();
        return true;
    }


    /**
     * @param string $email
     * @return bool
     * Passamos o email por JSON e validamos se existe no banco ou não.
     */
    public function forget(string $email): bool
    {
        $user = (new User())->findByEmail($email);

        if(!$user){
            $this->message->warning("O email informado não foi cadastrado!");
            return false;
        }

        $user->forget = md5(uniqid(rand(), true));
        $user->save();

        $view = new View(__DIR__ . "/../../themes/cardapio/restaurant/email");

        $message = $view->render("forget", [
            "first_name" => $user->first_name,
            "forget_link" => url("/recuperar/{$user->email}|{$user->forget}")
        ]);

        (new Email())->bootstrap(
            "Recuperação de senha | ". CONF_SITE_NAME,
            $message,
            $user->email,
            "{$user->first_name} {$user->last_name}"
        )->send();

        return true;
    }


    /**
     * @param string $email
     * @param string $code
     * @param string $password
     * @param string $passowordRe
     * @return bool
     */
    public function reset(string $email, string $code, string $password, string $passowordRe): bool
    {
        $user = (new User())->findByEmail($email);

        if(!$user){
            $this->message->warning("O e-mail informado não foi encontrado!");
            return false;
        }

        if($user->forget != $code){
            $this->message->error("Desculpe, mas o codigo de verificação não é valido :(");
            return false;
        }

        if(!is_password($password)){
            $min = CONF_PASSWORD_MIN_LEN;
            $max = CONF_PASSWORD_MAX_LEN;

            $this->message->warning("Sua senha deve ter entre {$min} e {$max} caracteres!");
            return false;
        }

        if($password != $passowordRe){
            $this->message->error("As senhas informadas são diferentes!");
            return false;
        }

        $user->password = $password;
        $user->forget = null;
        $user->save();
        return true;
    }
}