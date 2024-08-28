<?php
namespace CloudStorage;
include "auto_loader.php";

use CloudStorage\Mail\Mailing;
use CloudStorage\FileSystem\Scanner;
use CloudStorage\FileSystem\Files\Images\Jpeg;


class Main {
    function __construct(){
        $sendMail = new Mailing();
        $sendMail->sendMail();

        $scanner = new Scanner();
        $scanner->scanning();

        $jpeg = new Jpeg();
        $jpeg->getDimension();
    }
}
new Main();