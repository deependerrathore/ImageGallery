<?php 

class Cars{

	var $wheel_count;
	var $door_count = 4;

	function car_details(){
		echo 'Hello Student';
	}

}

$bmw = new Cars();

echo $bmw->wheel_count = 10;

$audi = new Cars();

echo $audi->wheel_count;//don't show anything since variable is not defined

?>