<?php 


class User {

	public $username ;
	private $email ;
	public const ADDRESS = 'mansoura';

	public function __construct($name , $email){
		$this -> username = $name ;
		$this -> email = $email ;
		$this -> complete();
	}

	public function __destruct(){
		echo "username is {$this -> username} and email : {$this -> email} and the address is  : " .self::ADDRESS;
	}

	public function complete(){
		echo "is complete";
	}

}


$user1 = new User('kareem' , 'kareem@ds.com');

echo "<br>";

// echo User::ADDRESS;