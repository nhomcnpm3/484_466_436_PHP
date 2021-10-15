<?php
include("database.php");
class Course_m extends database
{
	public function getAllCourse(){
		$sql = "SELECT * FROM course ORDER BY id_course DESC";
		$courses=mysqli_query($this->connection,$sql);
		return $courses;
	}

	public function getOneCourse($id){
		$sql = "SELECT * FROM course WHERE id_course = $id";
		$course = mysqli_query($this->connection,$sql);
		return $course;
	}
}

?>