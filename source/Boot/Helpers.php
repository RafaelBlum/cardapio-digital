<?php

use Source\Supports\Message;
use Source\Core\Session;
use Source\Models\User;
use Source\Core\Connect;
use Source\Supports\Thumb;

/**
 * function str_slug cria url amigável - ex: hello-world-name
*/
function str_slug(string $string): string
{
    $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

    $slug = str_replace(["-----", "----", "---", "--"], "-",
        str_replace(" ", "-",
            trim(strtr(utf8_decode($string), utf8_decode($formats), $replace))
        )
    );
    return $slug;
}

function str_studly_case(string $string): string
{
    $string = str_slug($string);
    $studlycase = str_replace(" ", "",
        mb_convert_case(str_replace("-", " ", $string), MB_CASE_TITLE)
    );
    return $studlycase;
}

function str_camel_case(string $string): string
{
    return lcfirst(str_studly_case($string));
}

function str_title(string $string): string
{
    return mb_convert_case(filter_var(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS)), MB_CASE_TITLE);
}

function str_limit_words(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    $arrWords = explode(" ", $string);
    $numWords = count($arrWords);

    if($numWords < $limit){
        return $string;
    }

    $words = implode(" ", array_slice($arrWords, 0, $limit));
    return $words . $pointer;
}

function str_limit_chars(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));

    if(mb_strlen($string) < $limit){
        return $string;
    }

    $chars = mb_substr($string, 0, mb_strrpos(mb_substr($string, 0, $limit), " "));
    return $chars . $pointer;
}

/**
 * ###########################
 * ########  VALIDATE  #######
 * ###########################
 */

function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function is_password(string $password): bool
{
    if(password_get_info($password)['algo'] || (mb_strlen($password) >= CONF_PASSWORD_MIN_LEN
            && mb_strlen($password) <= CONF_PASSWORD_MAX_LEN)){
        return true;
    }
    return false;
}

function password(string $password): string
{
    if(!empty(password_get_info($password)['algo']))
    {
        return $password;
    }
    return password_hash($password, CONF_PASSWORD_ALGO, CONF_PASSWORD_OPTION);
}

function passwd_verify(string $password, string $hash): bool
{
    return password_verify($password, $hash);
}

function password_rehash(string $hash): bool
{
    return password_needs_rehash($hash, CONF_PASSWORD_ALGO, CONF_PASSWORD_OPTION);
}

/**
 * ###########################
 * ########  REQUESTS  #######
 * ###########################
 */

function csrf_input(): string
{
    $session = new Session();
    $session->csrf();
    return "<input type='hidden' name='csrf' value='" . ($session->csrf_token ?? "") . "'/>";
}

function csrf_verify($request): bool
{
    $session = new Session();
    if (empty($session->csrf_token) || empty($request['csrf']) || $request['csrf'] != $session->csrf_token) {
        return false;
    }
    return true;
}

function flash(): ?string
{
    $session = new Session();
    if($flash = $session->flash())
    {
        echo $flash;
    }

    return null;
}

function message(): Message
{
    return new Message();
}

function db(): PDO
{
    return Connect::getInstance();
}

function session(): Session
{
    return new Session();
}

function user(): User
{
    return new User();
}

/**
 * ###########################
 * ##########  URL  ##########
 * ###########################
 */

/**
 * URL
 * Caso usuário passe '/' a barra é subtraida mb_substr
 * verifica se exist o host 'localhost':: strpos($_SERVER['HTTP_HOST'], 'localhost')
 */
function url(string $path = null): string
{
    $host = (strpos($_SERVER['HTTP_HOST'], "localhost") == "localhost" ? "true" : "false");

    if($host){

        if($path){
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }

    if($path){

        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}

function url_back(): string
{
    return ($_SERVER['HTTP_REFERER'] ?? url());
}

function redirect(string $url): void
{
    header("HTTP/1.1 302 Redirect");
    if(filter_var($url, FILTER_VALIDATE_URL)){
        header("Location: {$url}");
        exit;
    }

    if(filter_input(INPUT_GET, "route", FILTER_DEFAULT) != $url){
        $location = url($url);
        header("Location: {$location}");
        exit;
    }
}


/**
 * ###########################
 * ##########  ASSETS  #######
 * ###########################
 */

/**
 * THEME
 * Retorna views do diretorio "themes/cardapio"
 * Caso usuário passe '/' a barra é subtraida mb_substr
 * verifica se exist o host 'localhost':: strpos($_SERVER['HTTP_HOST'], 'localhost')
 */
function theme(string $path = null): string
{
    if(strpos($_SERVER['HTTP_HOST'], "localhost") == 0 ){
        if($path){
            return CONF_URL_TEST . "/themes/" . CONF_VIEW_THEME . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }

    if($path){
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}


/**
 * IMAGE
 * @param string $image | caminho da imagem
 * @param int $width    | largura
 * @param int $height   | altura
 * @return string
 */
function image(string $image, int $width, int $height = null): string
{
    return url() . "/" . (new Thumb())->make($image, $width, $height);
}

/**
 * ###########################
 * ##########  DATE  #########
 * ###########################
 */

function date_fmt(string $date = "now", string $format = "d/m/Y H:i:s"): string
{
    return (new DateTime($date))->format($format);
}

function date_fmt_br(string $date = "now"): string
{
    return (new DateTime($date))->format(CONF_DATE_BR);
}

function date_fmt_app(string $date = "now"): string
{
    return (new DateTime($date))->format(CONF_DATE_APP);
}

