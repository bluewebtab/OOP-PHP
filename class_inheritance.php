<?php

class Cars {

    var $wheels = 4;

    function greeting(){

        return "hello";
    }
    
}


$bmw = new Cars();

//extends the Cars class
//you can use variables and functions
class Trucks extends Cars {
    

    //you can override wheels
    var $wheels = 10;
}

$tacoma = new Trucks();

echo $tacoma->wheels;

?>


