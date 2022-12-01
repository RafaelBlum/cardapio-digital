<?php

namespace Source\App;

use Source\Core\Controller;
use Source\Models\Auth;
use Source\Models\User;

class AuthController extends Controller
{
    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * Method login user
     *  > Method success :register ok
     *  > Method confirm :confirmed email
     */
    public function login(?array $data): void
    {
        if (!empty($data['csrf'])) {
            if (!csrf_verify($data)) {
                $json['message'] = $this->message->error("Erro ao enviar, favor use o formulário")->render();
                echo json_encode($json);
                return;
            }

            if (empty($data['email']) || empty($data['password'])) {
                $json['message'] = $this->message->error("Informe seu email e senha para entrar")->render();
                echo json_encode($json);
                return;
            }

            $save = (!empty($data['save']) ? true : false);
            $auth = new Auth();
            $login = $auth->login($data['email'], $data['password'], $save);


            if ($login) {
                $json['redirect'] = url("/admin");
            } else {
                $json['message'] = $auth->message()->render();
            }

            echo json_encode($json);
            return;
        }

        $head = $this->seo->render(
            "Login | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/entrar"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("restaurant/auth/login", [
            "head" => $head,
            "cookie" => filter_input(INPUT_COOKIE, "authEmail")
        ]);
    }

    /**
     * Method register user
     *  > Method success :register ok
     *  > Method confirm :confirmed email
     */
    public function register(?array  $data): void
    {
        if(!empty($data['csrf'])){
            if(!csrf_verify($data)){
                $json['message'] = $this->message->error("Erro ao enviar, favor use o formulário!")->render();
                echo json_encode($json);
                return;
            }

            if(in_array("", $data)){
                $json['message'] = $this->message->warning("Existem campos em branco! Por favor verificar!")->render();
                echo json_encode($json);
                return;
            }

            $auth = new Auth();
            $user = new User();

            /**
             * Utilizamos o metodo para manter a segurança dos dados.
             * Para previnir qualquer mudança via console no navegador.
             */
            $user->bootstrap(
                $data['first_name'],
                $data['last_name'],
                $data['email'],
                $data['password']
            );

            if($auth->register($user)){
                $json['redirect'] = url("/confirma");
            }else{
                $json['message'] = $auth->message()->render();
            }

            echo json_encode($json);
            return;
        }

        $head = $this->seo->render(
            "Registrar | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/cadastrar"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("restaurant/auth/cad-register", [
            "head" => $head
        ]);
    }

    public function success(array $data): void
    {
        $email = base64_decode($data['email']);
        $user = (new User())->findByEmail($email);

        if($user && $user->status != "confirmed"){
            $user->status = "confirmed";
            $user->save();
        }

        $head = $this->seo->render(
            "Bem-vindo a " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/obrigado"),
            theme("/assets/images/blog-1.jpg")
        );

        echo $this->view->render("restaurant/auth/register", [
            "head" => $head,
            "data" => (object) [
                "title" => "Tudo pronto. Você já pode controlar :)",
                "desc"=> "Bem-vindo(a) a " . CONF_SITE_NAME . ", delicias de dar água na boca!",
                "image"=> url("storage/site/logo.png"),
                "link"=> url("/entrar"),
                "linkTitle"=> "Fazer login"
            ]
        ]);
    }
    public function confirm()
    {
        $head = $this->seo->render(
            "Registrar | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/confirma"),
            theme("/assets/images/blog-1.jpg")
        );

        echo $this->view->render("restaurant/auth/register", [
            "head" => $head,
            "data" => (object) [
                "title" => "Falta pouco! Confirme seu cadastro.",
                "desc"=> "Enviamos um link de confirmação para seu e-mail. Acesse e siga as instruções para concluir 
                        seu cadastro na " . CONF_SITE_NAME,
                "image"=> url("storage/site/logo.png")
            ]
        ]);
    }

    /**
     * @param null| array $data
     * Method forget password
     *  > Method success :register ok
     *  > Method confirm :confirmed email
     */
    public function forget(?array $data)
    {
        if (!empty($data['csrf'])) {
            if (!csrf_verify($data)) {
                $json['message'] = $this->message->error("Erro ao enviar, favor use o formulário")->render();
                echo json_encode($json);
                return;
            }

            if(empty($data['email'])){
                $json['message'] = $this->message->warning("Informe seu email para acessar!")->render();
                echo json_encode($json);
                return;
            }


            $auth = new Auth();

            if($auth->forget($data['email'])){
                $json['message'] = $this->message->success("Acesse seu E-mail para recuperar sua senha!")->render();
            }else{
                $json['message'] = $auth->message()->render();
            }

            echo json_encode($json);
            return;
        }

        $head = $this->seo->render(
            "Recuperar senha | " . CONF_SITE_NAME,
            CONF_SITE_DESC,
            url("/recuperar"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("restaurant/auth/forget", [
            "head" => $head
        ]);
    }

    /**
     * SITE RESET PASSWORD
     * @param array $data
     */
    public function reset(array $data): void
    {
        if (!empty($data['csrf'])) {
            if (!csrf_verify($data)) {
                $json['message'] = $this->message->error("Erro ao enviar, favor use o formulário")->render();
                echo json_encode($json);
                return;
            }

            if(empty($data['password']) || empty($data['password_re'])){
                $json['message'] = $this->message->warning("Informe as duas senhas para continuar, por favor!")->render();
                echo json_encode($json);
                return;
            }

            list($email, $code) = explode("|", $data["code"]);
            $auth = new Auth();

            if($auth->reset($email, $code, $data["password"], $data["password_re"])){
                $this->message->success("Senha alterada com sucesso!!! :)")->render();
                $json["redirect"] = url("/entrar");
            }else{
                $json["message"] = $auth->message()->render();
            }

            echo json_encode($json);
            return;

        }

        $head = $this->seo->render(
            "Crie sua nova senha no " . CONF_SITE_NAME,
            CONF_SITE_NAME,
            url("/recuperar"),
            theme("/assets/images/share.jpg")
        );

        echo $this->view->render("restaurant/auth/reset", [
            "head" => $head,
            "code" => $data['code']
        ]);

    }
}