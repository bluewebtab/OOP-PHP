<?php

class Cars {



    //this property  can be used only in this Class
    private $door_count = 4;



     function get_values(){
        echo $this->door_count; 
    }

    function set_values(){
         $this->door_count = 10;
    }

}

$bmw = new Cars();

$bmw->set_values();

$bmw->get_values();




?>