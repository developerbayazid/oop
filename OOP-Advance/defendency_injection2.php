<?php
// print_r(scandir('./OOP/OOP-Advance'));
// C:\xampp\htdocs\php\practice

interface BaseStorage {
    function setFileName($fn);
    function writeData($data);
    function setMode($mode);
}

class Storage implements BaseStorage {
    private $fn;
    private $mode;
    function __construct($fn, $mode = null){
        $this->fn = $fn;
        $this->mode = $mode;
    }
    function setFileName($fn){
        $this->fn = $fn;
    }
    function writeData($data){
        file_put_contents($this->fn, $data, $this->mode);
    }
    function setMode($mode){
        $this->mode = $mode;
    }

}

class DataManager {
    function saveData(BaseStorage $storage, $data){
        $storage->writeData($data);
    }
}

$path = "C:\\xampp\htdocs\php\practice\OOP\OOP-Advance\\test.txt";

$st = new Storage($path);
$st->setMode(FILE_APPEND);

$dm = new DataManager();
$dm->saveData($st, ' Hello Bangladesh');
