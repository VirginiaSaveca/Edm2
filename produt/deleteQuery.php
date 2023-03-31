<?php
	include_once("../_db.php");
	
	$id = $_GET['id'];

	$query = mysqli_query($conectar, "DELETE FROM produtos WHERE id = '$id'");
	
	header("location: deleteMsg.php");
?>