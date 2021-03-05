<?php 

trait FileCheck {
	public $fileArr ;


}



class Form {
	use FileCheck ;
	private $postedData ;
	private $error = [];
	public $conn ;


	public function __construct($postArr , $file) {
		$this -> postedData = $postArr ;
		$this -> fileArr = $file ;

		
	}

	public function formValidate(){
		$this -> checkUsername($this -> postedData['username']);
		$this -> checkEmail($this -> postedData['email']);


		return $this -> error ;
	}


	public function checkUsername($val){
		$trimed = trim($val);
		$trimed = htmlspecialchars($trimed);

		if(empty($val)){
			$this -> setError('username' , 'username can`t be empty');
		} else {
			if(!preg_match('/^[a-zA-Z0-9]{5,12}$/', $val)){
				$this -> setError('username' , 'wrong entry');
			}
		}
	}

	public function checkEmail($val){
		$trimed = trim($val);
		$trimed = htmlspecialchars($trimed);

		if(empty($val)){
			$this -> setError('email' , 'email can`t be empty');
		} else {
			if(!filter_var($val , FILTER_VALIDATE_EMAIL)){
				$this -> setError('email' , 'wrong email format');
			}
		}
	}

	public function allOk(){
		if(empty($this -> error)){
			// $this -> conn = new Table('user');
			// $query = $this -> conn -> selectAll();
			// foreach($query as $user) {
			// 	print_r($user);
			// }

			// print_r($query);
		}
	}









	public function setError($key , $value){
		$this -> error[$key] = $value ;
	}



}