<?php


namespace source\Supports;


use PHPMailer\PHPMailer\PHPMailer;
use source\Supports\Message;

class Email
{
    /**@var array*/
    private $data;

    /**@var PHPMailer*/
    private $mail;

    /**@var Message*/
    private $message;

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->message = new Message();

        /**
         * SETUP MAIL
        */
        $this->mail->isSMTP();
        $this->mail->setLanguage(MAIL["lang"]);
        $this->mail->isHTML(MAIL["html"]);
        $this->mail->SMTPAuth = MAIL["auth"];
        $this->mail->SMTPSecure = MAIL["secure"];
        $this->mail->CharSet = MAIL["charset"];

        /**
         * AUTH DB
         */
        $this->mail->Host = MAIL["host"];
        $this->mail->Username = MAIL["user"];
        $this->mail->Password = MAIL["passwd"];
        $this->mail->Port = MAIL["port"];
    }

    public function bootstrap(string $subject, string $message, string $toEmail, string $toName): Email
    {
        $this->data = new \stdClass();
        $this->data->subject = $subject;
        $this->data->message = $message;
        $this->data->toEmail = $toEmail;
        $this->data->toName = $toName;
        return $this;
    }

    public function send(string $fromEmail = MAIL["sender"]["address"], string $fromName = MAIL["sender"]["name"]): bool
    {
        if(empty($this->data)){
            $this->message->warning("Error! Verifique seus dados!");
            return false;
        }

        if(!is_email($this->data->toEmail)){
            $this->message->warning("Error! O destinatário invalido!");
            return false;
        }

        if(!is_email($fromEmail)){
            $this->message->warning("Error! O remetente é invalido!");
            return false;
        }

        try {
            $this->mail->Subject = $this->data->subject;
            $this->mail->msgHTML($this->data->message);

            $this->mail->addAddress($this->data->toEmail, $this->data->toName);
            $this->mail->setFrom($fromEmail, $fromName);

            if(!empty($this->data->attach)){
                foreach ($this->data->attach as $path => $name){
                    $this->mail->addAttachment($path, $name);
                }
            }

            $this->mail->send();
            return true;

        }catch (\Exception $exception){
            $this->message->warning($exception->getMessage());
            return false;
        }
    }

    public function attach(string $filePath, string $fileName): Email
    {
        $this->data->attach[$filePath] = $fileName;
        return $this;
    }

    public function mail(): PHPMailer
    {
        return $this->mail;
    }

    public function message(): Message
    {
        return $this->message;
    }

}