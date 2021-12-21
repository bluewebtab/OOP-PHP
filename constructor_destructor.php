<?php

class Cars {

    //this property  can be used throughout the whole program
    public $wheel_count = 4;

    static $door_count = 4;

     //A constructor allows you to initialize an object's properties upon creation of the object. 
     //If you create a __construct() function, 
     //PHP will automatically call this function when you create an object from a class.
     function __construct(){
        echo self::$door_count++;

    }

    //not used as much
    function __destruct(){
        echo self::$door_count--;

    }
    
}

//instance
$bmw = new Cars();
$mercedes = new Cars();



?>