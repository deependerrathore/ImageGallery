<?php 

class Cars{
	function gretting(){
		echo 'Hello Student';
	}

}

$bmw = new Cars();

$audi = new Cars();

$audi->gretting();
$bmw->gretting();
?>