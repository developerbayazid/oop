<?php

class Planet {
    static function getName(){
        return "Mars";
    }
    static function echoName(){
        // echo self::getName();
        echo static::getName();
    }
}

class Earth extends Planet {
    static function getName(){
        return "Earth";
    }
}

Earth::echoName();