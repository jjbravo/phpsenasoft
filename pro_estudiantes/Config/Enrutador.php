<?php namespace Config;

	class Enrutador{
		public static function run(Request $request){
			$controlador=$request->getControlador()."Controller";
			// print();
			$ruta= ROOT . "Controllers". DS . $controlador.".php";
			$metodo=$request->getMetodo();
			$argumento=$request->getArgumento();
			// print $ruta ;
			if($metodo=="index.php"){
					$metodo = "index";
				}
			if(is_readable($ruta)){
				require_once $ruta;
				// print();
				$contr = "Controllers\\".$controlador;
				$controlador= new $contr;
				if(!isset($argumento)){
					$datos=call_user_func(array($controlador,$metodo));
					// var_dump($datos);
				}else{
					$datos=call_user_func_array(array($controlador,$metodo), $argumento);
				}
			}else{
				print "No existe el controlador ".$controlador;
			}
			//cargar vistas
			$ruta = ROOT."Views".DS.$request->getControlador().DS.$request->getMetodo().".php";
			if(is_readable($ruta)){
				require_once $ruta;
			}else{
				print "No se encontro la vista ".$ruta;
			}
		}
	}

 
 ?>