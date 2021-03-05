<?php 


trait SportCar {
	public function __construct(private $color) {
	}
}

trait ClassicCar {
	public function getColor(){
		echo $this -> color ;
	}
}


class Car  {
	use SportCar , ClassicCar ;
}

$car = new Car('red') ;
$car -> getColor();
