<?php
	include_once("../_db.php");
	
	//Criando as Variaveis que armazenam os dados digitados pelo usuario
		$name= $_POST['name'];
		$quantidade = $_POST['quantidade'];
		$preco= $_POST['preco'];
		$prazo = $_POST['prazo'];

		$query = mysqli_query($conectar,  "INSERT INTO produtos (name, quantidade, preco,Prazo) VALUES ('$name','$quantidade', '$preco', '$prazo')");
	
	//Rediriciona para a pagina com a menssagem de sucesso
		header("location: addMsg.php");
?>