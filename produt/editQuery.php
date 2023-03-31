<?php
	include_once("../_db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
	$name= $_POST['name'];
	$quantidade = $_POST['quantidade'];
	$preco= $_POST['preco'];
	$prazo = $_POST['prazo'];


	//Edita  dados digitado no formulário
		$query = mysqli_query($conectar, "UPDATE produtos SET name = '$name', quantidade = '$quantidade', preco = '$preco', prazo='$prazo'  WHERE id = '$id' ");

	
	//menssagem
	header("location: editMsg.php");