<?php
echo "<pre>";


class House  {

	// properties -> variables & constants

	public $color ;
	public $floorNum ;


	// methods -> function
	public function securitySystem(){
		echo "is secured";
	}

	public function elevatorSys(){
		echo "work perfect";
	}
}

$villa = new House ;
// echo $villa -> color ;

$villa -> securitySystem();

$house = new House ;
echo $house -> color ;

// echo $color;

// echo get_class($villa);
