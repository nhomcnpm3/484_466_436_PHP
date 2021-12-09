<?php
include("database.php");
class Login_m extends database
{
	public function getUser($username,$passwod){
		$sql = "SELECT * FROM student where username = '$username' AND password = '$passwod'";
		echo"$sql";
		$result = mysqli_query($this->connection,$sql);
		$user = mysqli_num_rows($result);
		return $user;
	}
}
?>