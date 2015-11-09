<?php 
	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',realpath(dirname(__FILE__)) . DS);
	
	define('URL','http://localhost/cursophp/phpsenasoft/pro_estudiantes/');
	define('MEDIA','http://localhost/cursophp/phpsenasoft/pro_estudiantes/media');

	require_once "Config/Autoload.php";

	Config\Autoload::run();
	// new Config\Request()
	require_once "Views/Template.php";
	Config\Enrutador::run(new Config\Request());

	/*******************************/
	// phpinfo();				       //	
	/*******************************/
 ?>


