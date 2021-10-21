<?php
include("database.php");

class Question_m extends database
{
	
	public function getCourses(){
		$sql = "SELECT * FROM course";
		$result=mysqli_query($this->connection,$sql);
		$courses = $this->LoadAllRow($result);
		return $courses;
	}


	public function getQuestions($id_course){
		$sql = "SELECT * FROM question
				INNER JOIN teacher
				ON question.id_teacher = teacher.id_teacher 
				WHERE id_course = $id_course";
		$result=mysqli_query($this->connection,$sql);
		$questions = $this->LoadAllRow($result);
		return $questions;
	}
}
?>