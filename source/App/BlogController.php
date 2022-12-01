<?php


namespace Source\App;


use CoffeeCode\Optimizer\Optimizer;
use Source\Core\Controller;
use Source\Models\Category;
use Source\Models\Post;
use Source\Supports\Pager;

class BlogController extends Controller
{
    /**
     * BlogController constructor
     * Controller
     * seo      : Optimizer
     * view     : plates|Engine
     *
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * SITE BLOG
     * $head    : SEO
     * $page    : paginação
     * $blog    : list Post
     */
    public function blog(?array $data): void
    {
        $head = $this->seo->render(
            CONF_SITE_NAME . " | " . CONF_SITE_TITLE,
            CONF_SITE_DESC,
            url("blog"),
            theme("assets/restaurant/images/header.jpg")
        );

        $blog = (new Post())->find();
        $news = (new Post())->findById("1");

        $page = new Pager(url("/blog/page/"));

        $page->pager($blog->count(), 6, ($data['page'] ?? 1));

        echo $this->view->render("restaurant/blog", [
            "head" => $head,
            "title"=> "Blog",
            "paginator" =>$page->render(),
            "blog"=> $blog->limit($page->limit())->offset($page->offset())->fetch(true),
            "news" => $news
        ]);
    }

    public function blogSearch(array $data): void
    {
        if(!empty($data['find'])){
            $search = filter_var($data['find'], FILTER_SANITIZE_STRIPPED);
            echo json_encode(["redirect"=>url("/blog/buscar/{$search}/1")]);
            return;
        }

        if(empty($data['terms'])){
            redirect("blog/");
        }

        $search = filter_var($data['terms'], FILTER_SANITIZE_STRIPPED);
        $page = (filter_var($data['page'], FILTER_SANITIZE_STRIPPED) >= 1 ? $data['page'] : 1);

        $head = $this->seo->render(
            "Pesquisa por {$search} - " . CONF_SITE_NAME,
            "Pesquisa de posts por {$search}",
            url("/blog/buscar/{$search}/{$page}"),
            theme("assets/restaurant/images/header.jpg")
        );

        $blogPost = (new Post())->find("(title LIKE :s OR subtitle LIKE :s)", "s=%{$search}%");

        //CASO NÃO ENCONTRE RESULTADOS...
        if(!$blogPost->count()){
            echo $this->view->render("restaurant/blog", [
                "head"=>$head,
                "title"=>" ",
                "search"=> $search
            ]);
            return;
        }

        //ENCONTROU RESULTADOS
        $pager = new Pager(url("/blog/buscar/{$search}/"));
        $pager->pager($blogPost->count(), 9, $page);

        echo $this->view->render("restaurant/blog", [
            "head"=>$head,
            "title"=>"PESQUISA POR:",
            "search"=> $search,
            "blog" => $blogPost->limit($pager->limit())->offset($pager->offset())->fetch(true),
            "paginator" => $pager->render()
        ]);

    }

    public function post(array $data): void
    {
        $categories = (new Category())->find()->fetch(true);

        $post = (new Post())->findByUri($data['uri']);

        if(!$post) {
            redirect("Ooopss/404");
        }

        $post->views += 1;

        $post->save();

        $head = $this->seo->render(
            $post->title . " | " . CONF_SITE_TITLE,
            $post->subtitle,
            url("/blog/{$post->uri}"),
            image($post->cover, 1200, 628)
        );

        echo $this->view->render("restaurant/blog-post",[
            "head"=>$head,
            "post"=> $post,
            "related"=> (new Post())
                ->find("category = :c AND id != :i", "c={$post->category}&i={$post->id}")
                ->order("rand()")
                ->limit(5)
                ->fetch(true),
            "categories"=>$categories
        ]);
    }

}