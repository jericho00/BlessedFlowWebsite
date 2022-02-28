<?php
session_start();
require "db.php";
include "functions.php";
if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$_SESSION["status"]=false;
	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// $pass = password_hash($password, PASSWORD_DEFAULT);
		$pass = md5($pass);
		$sql = "SELECT * FROM users WHERE username ='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	
				$_SESSION["status"]= true;
            	header("Location: firstpage.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorrect Username or Password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorrect Username or Password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}




