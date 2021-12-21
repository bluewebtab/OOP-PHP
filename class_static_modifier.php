<?php

class Cars {

    //Static methods can be called directly - without creating an instance of the class first.
    static $wheel_count = 4;

    static $door_count = 4;

     static function car_detail(){

        echo Cars::$wheel_count;
        echo Cars::$door_count;
      
    }

    
    
}

echo Cars::$door_count;

Cars::car_detail();

?>