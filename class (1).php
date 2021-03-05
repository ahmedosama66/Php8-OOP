<?php
class Databases{  
    public $db_name;  
    public $connect;  
    public function __construct($db_name)  
    {  
        $this -> db_name = $db_name;
        $this -> connect = mysqli_connect("localhost", "root", "", "{$this -> db_name}");  
        if(!$this->connect)  
        {  
            echo 'Database Connection Error ' . mysqli_connect_error($this->connect);  
        }  
    }  


    public function insert($table_name, $data)  
    {  
        $string = "INSERT INTO ". $table_name ." (" ;
        $string .= implode(",", array_keys($data)) . ') VALUES (';            
        $string .= "'" . implode("','", array_values($data)) . "')";  

        if(mysqli_query($this->connect, $string))  
        {  
            return true;  
        }  
        else  
        {  
            echo mysqli_error($this->connect);  
        }  
    }  


    public function selectAll($table_name)  
    {  
        $array = array();  
        $query = "SELECT * FROM $table_name";  
        $result = mysqli_query($this->connect, $query);  
        foreach ($result as $row) {
            $array[] = $row;  
        }
        return $array;  
    }  


    public function select_where($table_name, $where_condition)  
    {  
        $condition = '';  
        $array = array();  
        foreach($where_condition as $key => $value)  
        {  
            $condition .= $key . " = '".$value."' AND ";  
        }  
        $condition = substr($condition, 0, -5);  
        $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
        $result = mysqli_query($this->connect, $query);  
        foreach ($result as $row) {
        $array[] = $row;  
        }
        return $array;  
    } 
    
    
    public function update($table_name, $fields, $where_condition)  
    {  
        $query = '';  
        $condition = '';  
        foreach($fields as $key => $value)  
        {  
            $query .= $key . "='".$value."', ";  
        }  
        $query = substr($query, 0, -2);  

        foreach($where_condition as $key => $value)  
        {  
            $condition .= $key . "='".$value."' AND ";  
        }  
        $condition = substr($condition, 0, -5);  

        $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
        if(mysqli_query($this->connect, $query))  
        {  
            return true;  
        }  
    }  


    public function delete($table_name, $where_condition)  
    {  
        $condition = '';  
        foreach($where_condition as $key => $value)  
        {  
            $condition .= $key . " = '".$value."' AND ";  
            $condition = substr($condition, 0, -5);  
            $query = "DELETE FROM ".$table_name." WHERE ".$condition."";  
            if(mysqli_query($this->connect, $query))  
            {  
                return true;  
            }  
        }  
    }  
    
}  



