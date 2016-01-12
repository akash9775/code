<?php
class Car {
    function Car() {
        $this->model = "VW";
	$this->newvaribale="akash";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
var_dump($herbie);
var_dump($herbie->model);
?>