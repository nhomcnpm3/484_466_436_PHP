<?php
 include("database.php");
 echo"234";
 class Login_m extends database
 {
 	public function getUser($username,$password){
 		$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
 		$result = mysqli_query($this->connection,$sql);
		$user = mysqli_num_rows($result);
 		return $user;
 	}
 }
?>