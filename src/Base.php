<?php

namespace VgrSystem;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use VgrSystem\BaseInterface;

class Base implements BaseInterface
{
    public function esrbShowImage( $rating = 3 ){
        header("Content-type: image/webp");
        $image = imagecreatefromwebp(__DIR__.'/img/esra-'.$rating.'.webp');
        imagewebp($image);
        imagedestroy($image);
        exit();
    }

    public function esrbContent( $type = "rating", $id = 3 ){

        return
    }
}
