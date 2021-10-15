<?php
include("database.php");
class Student_m extends database
{
	public function getStudents(){
		$sql = "SELECT * FROM student ORDER BY id_student DESC";
		$result = mysqli_query($this->connection,$sql);
		$students = $this->LoadAllRow($result);
		return $students;
	}

	public function getStudent($id){
		$sql = "SELECT * FROM student WHERE id_student = $id";
		$result = mysqli_query($this->connection,$sql);
		$student = $this->LoadOneRow($result);
		return $student;
	}
}
?>