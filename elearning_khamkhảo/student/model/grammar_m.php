<?php
include("database.php");
/**
* 
*/
class Grammar_m extends database
{
	public function getCourses(){
		$sql = "SELECT * FROM course ORDER BY id_course ASC";
		$courses=mysqli_query($this->connection,$sql);
		return $courses;
	}

	public function getGrammars(){
		$sql = "SELECT * FROM grammar";
		$grammars = mysqli_query($this->connection,$sql);
		return $grammars;
	}

	public function getGrammar($id_grammar){
		$sql = "SELECT * FROM grammar WHERE id_grammar = $id_grammar";
		$grammar=mysqli_query($this->connection,$sql);
		return $grammar;
	}
	
}
?>