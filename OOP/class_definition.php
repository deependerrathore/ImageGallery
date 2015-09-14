<?php 

class Cars{
	function gretting(){
		echo 'Deepak';
	}
}

$my_methods = get_class_methods('Cars');

foreach ($my_methods as $fun) {
	echo $fun;
}
?>