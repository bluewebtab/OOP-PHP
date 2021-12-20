<?php

class Cars {

    //this property  can be used throughout the whole program
    public $wheel_count = 4;

    //this property  can be used only in this Class
    private $door_count = 4;

    //This property  can only available in this class and sub-classes
    Protected $seat_count = 2;


    //this is public so it will show the variables
     function car_detail(){

        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
    }

    //won't show
    private function car_detail_one(){

        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
    }

    //won't show
    protected function car_detail_two(){

        echo $this->wheel_count;
        echo $this->door_count;
        echo $this->seat_count;
    }
    
}

//instance
$bmw = new Cars();

// echo $bmw->wheel_count;

// echo $bmw->door_count;  (This whill create error "Cannot access protected property" and not show on the web)

// echo $bmw->seat_count; (This whill create error "Cannot access protected property" and not show on the web)



//property variables can be shown if called in a function
echo $bmw->car_detail();


//won't show
// echo $bmw->car_detail_two();

//won't show
// echo $bmw->car_detail_one();

?>