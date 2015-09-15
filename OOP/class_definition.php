<?php 

class Cars{

	var $wheel_count = 4;
	var $door_count = 4;

	function car_details(){
		return "This car has " . $this->wheel_count . 'wheels.';
	}

}

$bmw = new Cars();

echo $bmw->car_details();
?>