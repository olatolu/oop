<?php 

class Cars {

	var $wheel_count = 4;

	var $door_count = 4;

function car_detail(){

return "This car had ". $this->wheel_count . " wheels";


	}	


}

$bmw = new Cars();

$mercedes = new Cars();

echo $bmw->wheel_count ."<br>";

echo $mercedes->wheel_count = 10;

echo "<br>";

echo $mercedes->car_detail();

echo "<br>";

echo $bmw->car_detail();

//


?>