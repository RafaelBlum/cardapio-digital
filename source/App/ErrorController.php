<?php


namespace Source\App;


use Source\Core\Controller;

class ErrorController extends Controller
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }


    /**
     * SITE ERROR
     * @param array $data
     */
    public function error(array $data): void
    {
        $error = new \stdClass();
        $error->codes = $data['errcode'];
        $error->desc = "Ooopss!! Desculpe, mas a página requerida não foi encontrada :/";
        $error->linkTitle = "Continue navegando";
        $error->link = url_back();

        $head = $this->seo->render(
            "{$error->codes} Indisponível!!",
            $error->desc,
            url("Ooopss/{$error->codes}"),
            theme("assets/restaurant/images/header.jpg"),
            false
        );

        echo $this->view->render("errors/error", [
            "head" => $head,
            "error"=> $error
        ]);
    }
}