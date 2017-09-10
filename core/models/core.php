<?php 

/*NUCLEO DE TODA LA APLICACION */

//constantes de conexion

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'jrp');

//constantes de la app

	define('HTML_DIR', 'html/');
	define('APP_TITLE', 'JPR Media Group');
	define('APP_COPY', 'Copyright &copy; '. date('Y', time()) . ' OcrendSoft');
	define('APP_URL', 'http://localhost/ocrend/');


//estructura

	require('vendor/autoload.php');
	require('core/models/class.Conexion.php');
 ?>