<?php
include("database.php");

class Login_m extends database
{
	public function getUser($username,$password){
		$sql = "SELECT * FROM teacher where id_teacher = '$username' AND password = '$password'";
		$result = mysqli_query($this->connection,$sql);
		$user = mysqli_num_rows($result);
		return $user;
	}
}
?>