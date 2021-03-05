<?php 


class Table {

	// private $tableName ;
	private $conn ;

	public const DBHOST = 'localhost';
	public const DBUSER = 'root';
	public const DBPASS = '';
	public const DBNAME = 'before_project';

	public function __construct(private $tableName){
		// $this -> tableName = $tbName ;
		$this -> conn = $this -> connect();
	}

	public function connect(){
		$connect = new mysqli(self::DBHOST , self::DBUSER , self::DBPASS , self::DBNAME);
		return $connect ;
	}


	public function selectAll(){
		$select = "SELECT * FROM {$this -> tableName}";
		$query = $this -> conn -> query($select);

		return $query; 
	}

	public function select($cond , $value) {
		$select = "SELECT * FROM {$this -> tableName} WHERE {$cond} = '{$value}'";

		$query = $this -> conn -> query($select);

		return $query ;
	}

	public function update(array $vals){
		$array = $this -> select('id' , 1) -> fetch_assoc();
		$keys = array_keys($array);
		array_pop($keys);
		array_shift($keys);

		$arrayValues = '';
		$arrayKeys = '';

		foreach($keys as $key => $value) {
			$arrayKeys .= $value .' , ';
			$arrayValues .= "'" . $vals[$key]."' , ";
		}

		$trimedKeys =  rtrim($arrayKeys , ' , ' );
		$trimedVals =  rtrim($arrayValues , ' , ' );

		$insert = "INSERT INTO {$this -> tableName} ({$trimedKeys}) VALUES ({$trimedVals})";

		$query = $this -> conn -> query($insert);

		return $this -> checkQuery($query) ?? '' ;

	}

	public function checkQuery($qu){
		if(!$qu) {
			echo $this -> conn -> error ;
		} else {
			return null ;
		}
	}


}

echo "<pre>";

$user = new Table(tableName : 'users');
$user -> update([1,2,3,4,5,6]);

// $x = $user -> select('name' , 'ahmed');
// // $x = $user -> selectAll() ;


// foreach($x as $user ){
// 	print_r($user);
// }
