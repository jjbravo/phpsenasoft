<?php  namespace Controllers;
// session_start();

use Models\Login as Login;

	class loginController{
		private $login;
		
		public function __construct(){
			$this->login=new Login();
		} 
		public function index(){
			if($_POST){
				$this->login->set('username',$_POST['username']);
				$this->login->set('password',$_POST['password']);
				$datos=$this->login->login();
				// var_dump($datos);
				if($row=mysqli_fetch_array($datos)){
					$_SESSION['usuario'] = $row['username'];
					$_SESSION['session'] =true;
					//print $_SESSION['usuario'];
					header("Location: ".URL."estudiantes");
				}else{
					$datos= true;
					return $datos;
				}

			}
					//print $_SESSION['usuario'];
			
		}
		public function salir(){
			session_destroy();
			header("Location: ".URL."login");
		}

	}


 ?>