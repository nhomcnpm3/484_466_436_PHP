<?php

	class database
	{
		var $connection=null;
		function __construct()
		{
			$hostname = "localhost";
			$username = "root";
			$password = "";
			$dbname = "elearning";
			$this->connection= mysqli_connect($hostname, $username, $password, $dbname);

		}
		

		public function Query($sql){
			$this->result = mysqli_query($this->connection,$query);
			return $this->result;
		}
		public function LoadAllRow($result){
			$array = array();
			while ($data = mysqli_fetch_assoc($result)) {
				$array[] = $data;
			}
			return $array;
		}

		public function LoadOneRow($result){
			$array = array();
			$array = mysqli_fetch_assoc($result);
			return $array;
		}

		
		public function insert($table, $data){

	        $field_list = '';
	        $value_list = '';

	        foreach ($data as $key => $value){
	            $field_list .= ",$key";
	            $value_list .= ",'".mysqli_real_escape_string($this->connection,$value)."'";
	        }
	        $sql = 'INSERT INTO '.$table. '('.trim($field_list, ',').') VALUES ('.trim($value_list, ',').')';
			echo"$sql";
			$result=mysqli_query($this->connection,$sql);
	        return $result;
	    }

	    public function Update($table, $data, $where){
	        $sql = '';
	        foreach ($data as $key => $value){
			
	            $sql .= "$key = '".mysqli_real_escape_string($this->connection,$value)."',";
	        }

	        $query = 'UPDATE '.$table. ' SET '.trim($sql, ',').' WHERE '.$where;
	        return mysqli_query($this->connection,$query);
	    }

		public function Delete($table, $where){

	        $sql = "DELETE FROM $table WHERE $where";
	        return mysqli_query($this->connection,$sql);
	    }
	}
?>