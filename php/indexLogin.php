<?php

	echo "<a href='#'></a>";
	session_start();
	$mail="";
	if(isset($_SESSION['user'])){
		$mail=$_SESSION["user"];
		$remember=$_SESSION["remember"];
		if($remember){
			header("location: fakehome.php");
		}
		
	}
	if(isset($_POST["login"])){
		$mail = $_POST["mail"];
		$pswdec = $_POST["psw"]; //password  non e' criptata da criptare xD 
		if($mail=="prova@email.com" && $pswdec=="1234"){
			$_SESSION["user"]=$mail;
			if($_POST["remember"]=="on"){
				$_SESSION["remember"]="1";
			}else{
				$_SESSION["remember"]="0";
			}
			header("location: fakehome.php");
		} else{
			echo "<script>alert('Nome utente o password errati');</script>";
		}
	}
?>