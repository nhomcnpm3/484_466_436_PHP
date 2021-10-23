<?php
include("database.php");
/**
* 
*/
class QUestion_m extends database
{
	
	public function getQuestions($id_teacher){
		$sql = "SELECT * FROM question 
				INNER JOIN teacher 
				ON question.id_teacher = $id_teacher AND teacher.id_teacher = $id_teacher
				ORDER BY id_question DESC";
		$result = mysqli_query($this->connection,$sql);
		$questions =mysqli_fetch_assoc($result);
		return $questions;
	}

	public function getAnswers(){
		$sql = "SELECT * FROM answer";
		$result = mysqli_query($this->connection,$sql);
		$answers = $this->LoadAllRow($result);
		return $answers;
	}

	public function getCourses(){
		$sql = "SELECT * FROM course ORDER BY id_course ASC";
		$result=mysqli_query($this->connection,$sql);
		$courses = $this->LoadAllRow($result);
		return $courses;
	}

	public function getQuestion($id_question){
		$sql = "SELECT * FROM question WHERE id_question = $id_question";
		$result = mysqli_query($this->connection,$sql);
		$question = $this->LoadOneRow($result);
		return $question;
	}

}
?>