<?php
session_start();
require "db.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$unameadmin = validate($_POST['username']);
	$passadmin = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: admin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: admin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM admin WHERE username='$unameadmin' AND password='$passadmin'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $unameadmin && $row['password'] === $passadmin) {
            	
        
            	header("Location: adminHome.php");
		        exit();
            }else{
				header("Location: admin.php?error=Incorrect Username or Password");
		        exit();
			}
		}else{
			header("Location: admin.php?error=Incorrect Username or Password");
	        exit();
		}
	}
	
}else{
	header("Location: admin.php");
	exit();
}




