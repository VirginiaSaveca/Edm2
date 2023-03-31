<?php
	include_once("../_db.php");
	
	$id = $_GET['id'];

	$query = mysqli_query($conectar, "DELETE FROM user WHERE id = '$id'");
	
	header("location: deleteMsg.php");
?>