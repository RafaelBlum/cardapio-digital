<?php


namespace Source\Test;


use Source\Core\Controller;
use Source\Models\Category;
use Source\Models\faq\Channel;
use Source\Models\faq\Question;
use Source\Models\Post;
use Source\Models\User;

class TestController extends Controller
{
    /**
     * WebController constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/test/");
    }

    /**
     * layout_2
     * TESTES DE VIEWS
     */
    public function index(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        //http://localhost/docitos/themes/docitos/restaurant-public/index
        echo $this->view->render("layout_2/index",["head"=>$head]);
    }

    public function blog(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        //http://localhost/docitos/themes/docitos/restaurant-public/index
        echo $this->view->render("layout_2/blog",["head"=>$head]);
    }

    public function blogSingle(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        //http://localhost/docitos/themes/docitos/restaurant-public/index
        echo $this->view->render("layout_2/blog-single",["head"=>$head]);
    }

    public function products(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        //http://localhost/docitos/themes/docitos/restaurant-public/index
        echo $this->view->render("layout_2/products",["head"=>$head]);
    }

    public function singleProducts(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        //http://localhost/docitos/themes/docitos/restaurant-public/index
        echo $this->view->render("layout_2/single-product",["head"=>$head]);
    }

    /**
     * layout_1
     * TEMPLATE BOOTSTRAP
     * layout_1
     */
    public function boots(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        echo $this->view->render("layout_1/sign-in/index",["head"=>$head]);
    }

    public function rotate(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        //http://localhost/docitos/themes/docitos/restaurant-public/index
        echo $this->view->render("pages/rotate",["head"=>$head]);
    }
}