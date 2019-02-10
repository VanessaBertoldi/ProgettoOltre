<?php
	session_start();
	if(isset($_SESSION["user"])){
		$mail = $_SESSION["user"];
		$remember = $_SESSION["remember"];
	}else{
		echo "<script>alert('Utente non loggato');</script>";
		header("location: index.php");
	}
	if(isset($_POST["logout"])){	
		if($remember){
			$_SESSION["remember"] = "0";
			header("location: index.php");
		}else{
			session_unset();
			session_destroy();
			header("location: index.php");				
		}
	}
?>