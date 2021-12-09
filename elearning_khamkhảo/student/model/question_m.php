<?php
include("database.php");

/**
* 
*/
class Question_m extends database
{
	public function getCourses(){
		$sql = "SELECT * FROM course ORDER BY id_course ASC";
		$courses =mysqli_query($this->connection,$sql);
		return $courses;
	}

	public function getQuestions($id_course,$id_test){
		$sql = "SELECT * FROM quiz_test WHERE id_course= $id_course AND id_test=$id_test";
		$questions =mysqli_query($this->connection,$sql);
		return $questions;
	}

	public function getCourse($id_course){
		$sql = "SELECT * FROM course WHERE id_course= $id_course";
		$course =mysqli_query($this->connection,$sql);
		return $course;
	}

	public function getTests($id_course){
		$sql = "SELECT * FROM test WHERE id_course= $id_course ORDER BY id_test ASC";
		$tests =mysqli_query($this->connection,$sql);
		return $tests;
	}
	
}

?>