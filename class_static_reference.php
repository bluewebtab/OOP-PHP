<?php

class Cars {

    //Static methods can be called directly - without creating an instance of the class first.
    static $wheel_count = 4;

  

     static function car_detail(){
        //use self for static referencing
        return self::$wheel_count;
      
    }

    
    
}

class Trucks extends Cars {

    static function display(){
        echo parent::car_detail();
    }

}

Trucks::display();

echo Cars::$door_count;

Cars::car_detail();

?>