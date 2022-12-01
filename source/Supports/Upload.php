<?php


namespace source\Supports;


use CoffeeCode\Uploader\File;
use CoffeeCode\Uploader\Image;
use CoffeeCode\Uploader\Media;

class Upload
{

    /**@var Message*/
    private $message;

    public function __construct()
    {
        $this->message = new Message();
    }

    public function message(): Message
    {
        return $this->message;
    }

    /**
     * IMAGE
     * image :: Dados da imagem recebidos pelo form.
     * name  :: nome da imagem
     * width  :: tamanho imagem
    */
    public function image(array $image, string $name, int $width = CONF_IMAGE_SIZE): ?string
    {
        $upload = new Image(CONF_UPLOAD_DIR, CONF_UPLOAD_IMAGE_DIR);
        if(empty($image['type']) || !in_array($image['type'], $upload::isAllowed())){
            $this->message->error("Você não selecionou uma imagem valida!");
            return null;
        }

        return $upload->upload($image, $name, $width, CONF_IMAGE_QUALITY);
    }

    public function file(array $file, string $name): ?string
    {
        $upload = new File(CONF_UPLOAD_DIR, CONF_UPLOAD_IMAGE_DIR);
        if(empty($file['type']) || !in_array($file['type'], $upload::isAllowed())){
            $this->message->error("Você não selecionou um arquivo valido!");
            return null;
        }

        return $upload->upload($file, $name);
    }

    public function media(array $media, string $name): ?string
    {
        $upload = new Media(CONF_UPLOAD_DIR, CONF_UPLOAD_MEDIA_DIR);
        if(empty($media['type']) || !in_array($media['type'], $upload::isAllowed())){
            $this->message->error("Você não selecionou uma midia valida!");
            return null;
        }

        return $upload->upload($media, $name);
    }

    public function remove(string $filePath): void
    {
        if(file_exists($filePath) && is_file($filePath)){
            unlink($filePath);
        }
    }

}