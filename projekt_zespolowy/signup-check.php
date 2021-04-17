<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;


	if (empty($uname)) {
		header("Location: signup.php?error=Login jest wymagany&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Haslo jest wymagane&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Powtorzenie hasla jest wymagane&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Imie jest wymagane&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=Powtorzone haslo sie nie zgadza&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);
		$tablename = $uname;
		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Login jest zajety, sprobuj innego&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
		   $result2 = mysqli_query($conn, $sql2);
		   $result3 = mysqli_query($conn,"CREATE TABLE `".$tablename."` ( id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,task VARCHAR(255))");
           if ($result2) {
           	 header("Location: signup.php?success=Twoje konto zostalo pomyslnie utworzone");
	         exit();
           }else {
	           	header("Location: signup.php?error=nieznany bład&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}