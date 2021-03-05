<?php 


class Validate {
	private static $passwordLen = 10 ;

	public static function validatePass($password){
		if(strlen($password) >= self::$passwordLen) {
			return true ;
		}

		return false ;
	}
}

$x = Validate::validatePass('sads');

var_dump($x) ;







// class User {

// 	public static $username = 'ahmed';

// 	public static function getName(){
// 		echo self::$username ;
// 	}

// }



// echo User::getName() ;

