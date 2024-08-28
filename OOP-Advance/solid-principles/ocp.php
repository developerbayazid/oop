<?php
//Open/Close principles

// Open for extension and close for modification

// class DisplayFile {
//     function display($file, $fileType){
//         if("mp4" == $fileType){
//             //Display Video Player
//         }elseif("mp3" == $fileType){
//             //Display Audio Player
//         }else {
//             //Display Text file
//         }
//     }
// }

interface FileInterface {
    function display();
}

class DisplayFile {
    function display(FileInterface $file){
        $file->display();
    }
}



class ImageFile implements FileInterface {
    function display(){
        echo "Display Image\n";
    }
}
class JPG implements FileInterface {
    public function display(){
        echo "Jpg Image Loader";
    }
}
class VideoPlayer implements FileInterface {
    function display(){
        echo "Display Video Player\n";
    }
}
class AudioPlayer implements FileInterface {
    function display(){
        echo "Display Audio Player\n";
    }
}
class TextFile implements FileInterface {
    function display(){
        echo "Text File Loading\n";
    }
}


$dp = new DisplayFile();

$image = new ImageFile();
$video = new VideoPlayer();
$audio = new AudioPlayer();
$textFile = new TextFile();
$jpg = new JPG();

$dp->display($image);
$dp->display($video);
$dp->display($audio);
$dp->display($textFile);
$dp->display($jpg);