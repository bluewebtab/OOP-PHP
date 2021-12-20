<?php

class Cars {

    var $wheel_count = 4;
    var $door_count = 4;

    function car_detail(){

        return "This car has " . $this->wheel_count;

    }
    
}

//instance
$bmw = new Cars();

//instance
$mercedes = new Cars();

//This is how to grab the variable
echo $bmw->wheel_count;

echo "<br>";

echo $mercedes->car_detail();

?>