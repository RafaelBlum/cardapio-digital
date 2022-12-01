<?php


namespace Source\App;


use Source\Core\Controller;
use Source\Models\Category;
use Source\Models\Product;
use Source\Supports\Pager;

class ProductController extends Controller
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    public function shop(?array $data): void
    {


        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        $products = (new Product())->find();

        $page = new Pager(url("/produtos/page/"));

        $page->pager($products->count(), 8, ($data['page'] ?? 1));


        echo $this->view->render("restaurant/products",[
            "head"=>$head,
            "title"=> "Produtos",
            "products" => $products->limit($page->limit())->offset($page->offset())->fetch(true),
            "paginator" => $page->render()
        ]);
    }

    public function products(): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        echo $this->view->render("restaurant/products",[
            "head"=>$head
        ]);
    }

    public function product(array $data): void
    {

        $product = (new Product())->findByUri($data['uri']);

        if(!$product){
            redirect("Ooopss/404");
        }

        $product->views += 1;
        $product->save();

        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url(),
            url("assets/restaurant/images/header.jpg")
        );

        echo $this->view->render("restaurant/product-item", [
            "head" => $head,
            "product" => $product,
            "categories" => (new Category())->find("uri != 'noticia'")
            ->order("rand()")->fetch(true)
        ]);

    }

}