<?php


namespace source\Supports;


use CoffeeCode\Cropper\Cropper;

class Thumb
{
    private $cropper;
    private $uploads;

    public function __construct()
    {
        $this->cropper = new Cropper(CONF_IMAGE_CACHE, CONF_IMAGE_QUALITY['jpg'], CONF_IMAGE_QUALITY['png']);
        $this->uploads = CONF_UPLOAD_DIR;
    }

    public function make(string $image, int $width, int $heigth = null): string
    {
        return $this->cropper->make("{$this->uploads}/{$image}", $width, $heigth);
    }

    public function flush(string $image = null): void
    {
        if($image){
            $this->cropper->flush("{$this->uploads}/{$image}");
            return;
        }

        $this->cropper->flush();
        return;
    }

    public function cropper(): Cropper
    {
        return $this->cropper;
    }

}