<?php
include("database.php");
/**
* 
*/
class Test_m extends database
{
	public function getCourses(){
		$sql = "SELECT * FROM course";
		$result=mysqli_query($this->connection,$sql);
		$courses = $this->LoadAllRow($result);
		return $courses;
	}

	public function getTests($id_course){
		$sql = "SELECT * FROM test 
				INNER JOIN teacher 
				ON test.id_teacher = teacher.id_teacher 
				WHERE id_course=$id_course ORDER BY id_test ASC";
		$result = mysqli_query($this->connection,$sql);
		$tests = $this->LoadAllRow($result);
		return $tests;
	}
}
?>