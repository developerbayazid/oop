<?php
namespace CloudStorage\FileSystem\Files\Images;
use CloudStorage\FileSystem\Files\Contracts\ImageContract;
use CloudStorage\Mail\Mailing;

class Jpeg implements ImageContract {
    function getDimension(){
        echo "500x500\n";
        (new Mailing)->sendMail();
    }
}

//Dependency Injection