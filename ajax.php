<?php 
	if($_POST){

		require('core/models/core.php');

		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
			case 'email':
				require("core/bin/ajax/goEmail.php");
				break;
			
			default:
				header('location: index.php');
				break;
		}
	}else{

		header('location: index.php');
	}
 ?>