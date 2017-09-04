<?php 
	$db = new Conexion();
	$data = $db->real_escape_strings($_POST['user']);
	$email = $db->real_escape_strings($_POST['email']);
	$sql = $db->query("SELECT * FROM consultas")
	$db->close();
 ?>