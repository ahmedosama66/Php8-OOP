<?php


interface SportCar {
	public function fixCar();
}

interface ClassicCar {
	public function fixCar2($car);
}


class Car implements SportCar , ClassicCar {
	public function fixCar() {

	}

	public function fixCar2($car) {

	}
}

$car = new Car();
