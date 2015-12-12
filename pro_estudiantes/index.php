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


//Un Comentario para senasoft


echo "Hola mundo";

Este es un comentario desde la rama backend
	/*******************************/
	// phpinfo();				       //	
	/*******************************/
 ?>


