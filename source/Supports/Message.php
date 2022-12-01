<?php


namespace Source\Supports;


use Source\Core\Session;

class Message
{
    private $text;
    private $type;

    public function __toString()
    {
        return $this->render();
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function render(): string
    {
        return "<div class='". CONF_MESSAGE_CLASS ." {$this->getType()}'>{$this->getText()}</div>";
    }

    public function filter(string $message): string
    {
        return filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
    }

    public function success(string $message): Message
    {
        $this->text = $this->filter($message);
        $this->type = CONF_MESSAGE_SUCCESS;
        return $this;
    }

    public function warning(string $message): Message
    {
        $this->text = $this->filter($message);
        $this->type = CONF_MESSAGE_WARNING;
        return $this;
    }

    public function error(string $message): Message
    {
        $this->text = $this->filter($message);
        $this->type = CONF_MESSAGE_ERROR;
        return $this;
    }

    /**
     * Set flash Session Key
     */
    public function flash(): void
    {
        (new Session())->set("flash", $this);
    }

    public function json()
    {
        return json_encode([$this->getType() => $this->getText()]);
    }

}