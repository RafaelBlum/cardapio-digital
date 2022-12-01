<?php

use MatthiasMullie\Minify\CSS;
use MatthiasMullie\Minify\JS;

$host = (strpos($_SERVER['HTTP_HOST'], "localhost") == "localhost" ? "true" : "false");

/**
 * Ajustar minificação de ativos CSS/JS:
 * Curso Formação Full Stack PHP Developer\08 - Projeto Website com MVC\08.06 - Otimizando recursos ativos
*/

if(!$host){

    $minCSS = new CSS();
    $minJS = new JS();

    /**
     * ###########################
     * ##########  CSS  #########
     * ###########################
     */
    $minCSS->add(__DIR__ . "/../../shared/styles/bootstrap.min.css");
    $minCSS->add(__DIR__ . "/../../shared/styles/style.css");

    $cssDir = scandir(__DIR__ . "/../../assets/restaurant/css");

    foreach ($cssDir as $css){
        $cssFile = __DIR__ . "/../../assets/restaurant/css/{$css}";

        if(is_file($cssFile) && pathinfo($cssFile)['extension'] == "css"){
            $minCSS->add($cssFile);
        }

        $minCSS->minify(__DIR__ . "/../../shared/minify/styles.css");
    }

    /**
     * ###########################
     * #######  JAVASCRIPT  ######
     * ###########################
     */
    $minJS->add(__DIR__ . "/../../shared/scripts/bootstrap.min.js");
    $minJS->add(__DIR__ . "/../../shared/scripts/jquery-1.10.2.min.js");
    $minJS->add(__DIR__ . "/../../shared/scripts/modernizr-2.6.2.min.js");

    $jsDir = scandir(__DIR__ . "/../../assets/restaurant/js");

    foreach ($jsDir as $js){
        $jsFile = __DIR__ . "/../../assets/restaurant/js/{$js}";

        if(is_file($jsFile) && pathinfo($jsFile)['extension'] == "js"){
            $minJS->add($jsFile);
        }

        $minJS->minify(__DIR__ . "/../../shared/minify/scripts.js");
    }


}
