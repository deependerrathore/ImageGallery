<?php 

class Cars{
	var $wheels = 4;
	function car_details(){
		return 'Hello';
	}

}

$bmw = new Cars();

class Trucks extends Cars{

}

$tacoma = new Trucks();

echo $tacoma->wheels;

?>