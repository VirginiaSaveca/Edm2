<?php
	include_once("../_db.php");
	
	//Variaveis de armazenamento
		$name= $_POST['name'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$username = $_POST['usename'];
		$password = $_POST['password'];

	//Query de insersao no banco de dados
	$query = mysqli_query($conectar,  "INSERT INTO user (name, contact,email,usename, password) VALUES ('$name','$contact,','$email','$username','$password')");
	
	
		header("location: addMsg.php");
?>