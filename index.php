<?php
/**
 * Descryption -=======================================================================================
 * autoload:     Recursos e componentes
 * ob_start:     Controle cache
 * -===================================================================================================*/

ob_start();

require __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/source/Boot/Helpers.php";

use Source\Core\Session;
use CoffeeCode\Router\Router;

$session = new Session();
$router = new Router(url(), ":");

/** ======================= WEB ROUTERS =======================*/
$router->namespace("source\App")->group(null);
$router->get("/", "WebController:home", "home.home");

/** ======================= ADMIN ROUTERS =======================*/
$router->namespace("source\App")->group("/admin");
$router->get("/", "AppController:admin");
$router->get("/sair", "AppController:logout", "login.logout");


/** ======================= AUTH ROUTERS =======================*/
$router->namespace("source\App")->group(null);
$router->get("/entrar", "AuthController:login");
$router->post("/entrar", "AuthController:login");

$router->get("/cadastrar", "AuthController:register", "login.register");
$router->post("/cadastrar", "AuthController:register", "login.register");

$router->get("/recuperar", "AuthController:forget", "login.forget");
$router->post("/recuperar", "AuthController:forget", "login.forget");

$router->get("/recuperar/{code}", "AuthController:reset", "login.reset");
$router->post("/recuperar/resetar", "AuthController:reset", "login.reset");


$router->get("/obrigado/{email}", "AuthController:success", "login.success");
$router->get("/confirma", "AuthController:confirm", "login.confirm");


/** ======================= PRODUCT ROUTERS =======================*/
$router->namespace("source\App")->group("produtos");

/** TODOS PRODUTOS + PAGINAÇÃO*/
$router->get("/", "ProductController:shop", "product.shop");
$router->get("/page/{page}", "ProductController:shop", "product.shop");

/** SELEÇÃO DE PRODUTO*/
$router->get("/{uri}", "ProductController:product", "product.product");


/** ======================= BLOG ROUTERS =======================*/
$router->namespace("source\App")->group("blog");
$router->get("/", "BlogController:blog", "blog.blog");
$router->get("/page/{page}", "BlogController:blog", "blog.page");

$router->get("/{uri}", "BlogController:post", "blog.post");
$router->post("/buscar", "BlogController:blogSearch", "blog.buscar");
$router->get("/buscar/{terms}/{page}", "BlogController:blogSearch", "blog.buscar");


/** ====================== ERRORS ROUTERS ======================*/
$router->namespace("source\App")->group("Ooopss");
$router->get("/{errcode}", "ErrorController:error", "error");


/** =========== DISPATCH (Executa as rotas) =====================**/
$router->dispatch();

/** ================== Disparo de rotas inexistentes ============ **/
if($router->error()){
    $router->redirect("/Ooopss/{$router->error()}");
}

ob_end_flush();














