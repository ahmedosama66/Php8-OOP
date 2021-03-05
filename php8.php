<?php


class User {

	// constrctor property promotion
	//union types
	public function __construct(public string|array $username ,  private $email)
	{}


}


// named params
$user = new User(

	username : 'ahmed' ,
	email : 'a@sd.com'

);


echo $user -> username ;


// function sum ( int|string|array|bool $x , array $y) {
// 	return $x + $y ;
// }

// sum('sdsad' ,23)