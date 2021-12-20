<?php

class Cars {

    function greeting(){

        echo "Hello Student";

    }


    
}

/**
 * 
 * * instance
 * * think of them as same blueprints but different templates
 * *
 */
$bmw = new Cars();

$mercedes = new Cars();

//callings a function within a class
$bmw->greeting();

?>