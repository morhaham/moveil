<?php

namespace MoveIL\Model;

class Stop {
    private $stop_name;
    private $stop_id;
    private $stop_desc;
    private $stop_code;
    private $stop_lat;
    private $stop_lon;
    private $zone_id;
 

    function __construct($stop_name) {
        $this->stop_name = $stop_name;
    }

    function __set($property,$value) {
        if(property_exists($this, $property)) {
            $this->$property = $value;
            echo("$value was set to $property.\n");
        }
        else {
            echo("No property with the name $property, nothing was set.\n");
        }
    }

    function __get($property) {
        if(!property_exists($this, $property)) {
            echo("No property with the name $property at line ".__LINE__." in ".__FILE__."\n");
        }
        else {
            return $this->$property;
        }
    }




}











// $stop1 = new Stop('block 1');
// $stop1->stop_code = 1234; $stop1->stop_cofee = 1234;
// $stop1->zone_id = 455;
// $stop1->street = 333;
// echo($stop1->stop_name);
