<?php namespace Views;
session_start();
$template = new Template();
	class Template{
	public function __construct(){
?>

este es mi cambio (Lemos)


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Administración de estudiantes PRactica Git Hub</title>
	<link rel="stylesheet" href="<?php echo URL;  ?>Views/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo URL;  ?>Views/static/css/styles.css">

</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Plataforma Estudiantes</a>
		</div>
	<h1>mI CAMBIO</h1>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<?php if($_SESSION['session']){ ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiantes <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo URL; ?>estudiantes">Listar</a></li>
						<li><a href="<?php echo URL; ?>estudiantes/agregar">Agregar</a></li>
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cursos <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo URL; ?>cursos">Listar</a></li>
						<li><a href="<?php echo URL; ?>cursos/agregar">Agregar</a></li>
						
					</ul>
				</li>
				<?php } ?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
			<?php if($_SESSION['session']){ ?>

			<li><a href="">Hola <?php echo $_SESSION['usuario']; ?></a></li>
				<li><a href="<?php echo URL; ?>login/salir/">Salir</a></li>
			<?php }else{ ?>
				<li><a href="<?php echo URL; ?>login">Login</a></li>
				<?php } ?>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
<div class="container">

	<h2>Hola Test GIT backend</h2>
	<h1>hola bebe ya que contigo no sirve la labia</h1>
<?php
		}





		public function __destruct(){
?>
</div>
<footer>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque recusandae laboriosam delectus cum consectetur veritatis et nam, quisquam a suscipit ullam. Sed eveniet, accusamus deleniti dolores laborum, debitis cum fugit.</footer>
<script src="<?php echo URL;  ?>Views/static/js/jquery-1.11.3.min.js" ></script>
<script src="<?php echo URL;  ?>Views/static/js/bootstrap.min.js" ></script>
	</body>
</html>
<?php 
		}
	}


 ?>