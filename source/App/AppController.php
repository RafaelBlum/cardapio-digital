<?php


namespace Source\App;

use Source\Core\Controller;
use Source\Models\Auth;
use Source\Supports\Message;

class AppController extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_ADMIN);

        /**
         * CASO USUÁRIO NÃO CONECTADO
        */
        if(!Auth::user()){
            $this->message->warning("Efetue seu login para acessar a área administrativa!")->flash();
            redirect("entrar");
        }
    }

    public function admin()
    {
        echo flash();
        var_dump(Auth::user());
        echo "<a title='Sair' href='". url("/admin/sair") ."'>Sair</a>";
    }

    public function logout()
    {
        (new Message())->warning("Você saiu da área administrativa, " . Auth::user()->first_name . "! Volte logo!")->flash();
        Auth::logout();
        redirect("/entrar");
    }

}