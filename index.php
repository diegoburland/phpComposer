<?php 


require('core/models/core.php');

if(isset($_GET['view'])){
		if(file_exists('core/controllers/' .strtolower($_GET['view']) . 'Controllers.php')){
			include('core/controllers/' .strtolower($_GET['view']) . 'Controllers.php');
		}else{
			include('core/controllers/errorControllers.php');
	}
}else{
		include('core/controllers/indexControllers.php');
}
	
 ?>