<?php


 class User {
	protected $username ;
	// constrctor property promotion
	public function __construct ($username){
		$this -> username = $username ;
	}

	final public function getUsername(){
		echo $this -> username;
	}



}

class AdminUser extends User {

	public $priv ;

	public function __construct($username , $priv) {
		// $this -> username = $username ;
		parent:: __construct($username);
		$this -> priv = $priv ;
	}


	public function getUsername(){
		echo $this -> username;
		echo "<br>";
		echo $this -> priv;
	}

}


$user = new AdminUser('kareem' , 'admin');
$user2 = new User('ahmed');
echo $user2 -> getUsername();
echo "<br>";
echo $user -> getUsername();