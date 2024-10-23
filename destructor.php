<?php

class abc{
    public function __construct(){
        echo "this is constructor method <br> " ;
    }
    public function hello(){
        echo "this is hello function <br> ";
    }
    public function __destruct()
    {
        echo "this is destructor function";
    }

}


$test = new abc();
$test->hello();