<?php


namespace source\Supports;


use CoffeeCode\Optimizer\Optimizer;

class Seo
{
    /**@var Optimizer*/
    private $optimizer;

    public function __construct(string $schema = "article")
    {
        $this->optimizer = new Optimizer();
        $this->optimizer->openGraph(
            CONF_SITE_NAME,
            CONF_SITE_LANG,
            $schema
        )->twitterCard(
            CONF_SOCIAL_TWITTER_CREATOR,
            CONF_SOCIAL_TWITTER_PUBLISHER,
            CONF_SITE_DOMAIN
        )->publisher(
            CONF_SOCIAL_FACEBOOK_PAGE,
            CONF_SOCIAL_FACEBOOK_AUTHOR
        )->facebook(
            CONF_SOCIAL_FACEBOOK_APP
        );
    }

    public function __get($name)
    {
        $this->optimizer()->$name;
    }

    public function render(string $title, string $description, string $url, string $image, bool $fallow = true): string
    {
        return $this->optimizer->optimize($title, $description, $url, $image, $fallow)->render();
    }

    public function optimizer(): Optimizer
    {
        return $this->optimizer;
    }

    public function data(string $title = null, string $desc = null, string $url = null, string $image = null)
    {
        return $this->optimizer->data($title, $desc, $url, $image);
    }

}