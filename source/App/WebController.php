<?php


namespace Source\App;


use Source\Core\Controller;
use Source\Models\Category;
use Source\Models\faq\Channel;
use Source\Models\faq\Question;
use Source\Models\Post;
use Source\Models\Product;
use Source\Models\User;
use Source\Supports\Pager;

/**
 * Class WebController
 * @package Source\App
 */
class WebController extends Controller
{
    /**
     * WebController constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * SITE HOME
     */
    public function home(?array $data): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        echo $this->view->render("restaurant/home", [
            "head" => $head,
            "faq" => (new Question())
                ->find("channel_id = :id", "id=1", "question, response")
                ->order("order_by")
                ->fetch(true),
            "blog" => (new Post())->find()->order("post_at DESC")->limit(3)->fetch(true),
            "snacks" => (new Product())->find("products.category = '4'")->limit(4)->fetch(true),
            "candys" => (new Product())->find("products.category = '5'")->limit(4)->fetch(true),
            "cakesPies" => (new Product())->find("products.category = '2'")->limit(4)->fetch(true)
        ]);
    }

}