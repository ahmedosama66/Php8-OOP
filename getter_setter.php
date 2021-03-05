<?php 



class User {

	private $username ;
	public $email ;
	public const ADDRESS = 'mansoura';

	// setter methods
	public function setUser($name , $email){
		$this -> username  = $name ;
		$this -> email = $email ;
	}

	//getter methods 
	public function getUsername(){
		echo $this -> username ;
	}



}

// $user1 = new User ;
// $user1 -> setUser('kareem' , 'kareem@k.com');
// echo $user1 -> username ;

$user2 = new User ;
$user2 -> setUser('ahmed' , 'ahmed@a.com');
echo $user2 -> getUsername() ;