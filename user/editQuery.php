<?php
	include_once("../_db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$id	= $_POST['id'];
		$name= $_POST['name'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$password = $_POST['password'];

	//Edita  dados digitado no formulário
		$query = mysqli_query($conectar, "UPDATE user SET name = '$name', contact = '$contact', email = '$email', password='$password'  WHERE id = '$id' ");

	
	//menssagem
	header("location: editMsg.php");
?>