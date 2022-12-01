<?php


namespace Source\Core;


use Source\Supports\Message;
use Source\Supports\Seo;

class Controller
{
    /**@var View*/
    protected $view;

    /**@var Seo */
    protected $seo;

    /**
     * @var Message
     */
    protected $message;

    public function __construct(string $pathToView = null)
    {
        $this->view = new View($pathToView);
        $this->seo = new Seo();
        $this->message = new Message();
    }



}