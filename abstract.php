<?php 



abstract class User {

	public function __construct(public $username) {

	}

	public abstract function getName();

}


class AdminUser extends User {
	// public function getName(){
	// 	echo $this -> username ;
	// }
}

$user = new AdminUser('ahmed');
$user -> getName();