<?php
include("database.php");
class Test_m extends database
{
	
	public function getCourses(){
		$sql = "SELECT * FROM course ORDER BY id_course ASC";
		$result=mysqli_query($this->connection,$sql);
		$courses = $this->LoadAllRow($result);
		return $courses;
	}

	public function gettests($id_course,$id_teacher){
		$sql = "SELECT * FROM test WHERE id_course=$id_course AND id_teacher = $id_teacher ORDER BY id_test DESC";
		$result=mysqli_query($this->connection,$sql);
		$tests = $this->LoadAllRow($result);
		return $tests;
	}

	public function getTest($id_test){
		$sql = "SELECT * FROM test WHERE id_test=$id_test ";
		$result = mysqli_query($this->connection,$sql);
		$test = $this->LoadOneRow($result);
		return $test;
	}

	public function getQuestions(){
		$sql = "SELECT * FROM question ORDER BY id_question ASC";
		$result=mysqli_query($this->connection,$sql);
		$questions = $this->LoadAllRow($result);
		return $questions;
	}

	public function getQuestions_quiz($id_test){
		$sql = "SELECT * FROM quiz_test WHERE id_test=$id_test ORDER BY id_question ASC";
		$result=mysqli_query($this->connection,$sql);
		$questions = $this->LoadAllRow($result);
		return $questions;
	}

	public function getQuestion($id_question){
		$sql = "SELECT * FROM question WHERE id_question=$id_question";
		$result = mysqli_query($this->connection,$sql);
		$test = $this->LoadOneRow($result);
		return $test;
	}
}
?>