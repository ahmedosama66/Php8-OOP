<?php


class File {

	public $fileName ;

	public function __construct($fname) {
		$this -> fileName = $fname;
	}

	public function fileWrite($data){
		$handler = fopen($this -> fileName , 'a');
		fwrite($handler, $data);
		fclose($handler);
	}

	public function readFile(){
		$handler = fopen($this -> fileName, 'r');
		$read = fread($handler, filesize($this -> fileName));
		fclose($handler);

		return $read ;
	}

}



$file = new File('test.txt');
$file -> fileWrite('new data from class');
echo $file -> readFile();

// $file2 = new File('newTest.php');