<?php
include("database.php");
class Teacher_m extends database
{
	public function getTeachers(){
		$sql = "SELECT * FROM teacher ORDER BY id_teacher DESC";
		$result = mysqli_query($this->connection,$sql);
		$teachers = $this->LoadAllRow($result);
		return $teachers;
	}

	public function getTeacher($id){
		$sql = "SELECT * FROM teacher WHERE id_teacher = $id";
		$result = mysqli_query($this->connection,$sql);
		$teacher = $this->LoadOneRow($result);
		return $teacher;
	}
}
?>