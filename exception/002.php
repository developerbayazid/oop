<?php

class MyException extends Exception{};
class CustomException extends Exception{};

function testException(){
    throw new MyException();
}

try{
    testException();
} catch(MyException $e) {
    echo "My Exception Caught";
} catch(CustomException $e) {
    echo "Custom Exception Caught";
} catch(Exception $e) {
    echo "Exception Caught";
} finally {
    echo "\nDatabase Cleaned Up!";
}