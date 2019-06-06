<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- Descripcion, Palabras Claves y Autor -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Styles -->
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/bootstrap/bootstrap.min.css">
	<!-- Tabla bootstrap -->
	<link rel="stylesheet" type="text/css" href="view/plug/datatables-plugins/dataTables.bootstrap.css">
	<!-- Tabla bootstrap -->
	<link rel="stylesheet" type="text/css" href="view/plug/datatables-responsive/dataTables.responsive.css">
	<!-- Font awesome CSS -->
	<link rel="stylesheet" type="text/css" href="view/fontawesome-free/css/all.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/style.css">
	<!-- Grupak-Blue -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/grupak-blue.css">
	<!--Favicon Grupak-->
	<link rel="shortcut icon" href="view/img/favicon/grupak-favicon.ico">
	<title>MESA DE AYUDA</title>
</head>
<body>
	<!-- My Header Start-->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<!-- Logo Grupak -->
					<a href=""><img src="view/img/grupak.png" alt="Grupak Operaciones"></a>
				</div>

				<div class="col-md-4 offset-md-4">
					<div class="list">
						<!--Telefono-->
						<div class="phone">
							<i class="fa fa-phone"></i> Telefono:55 4124- ext.7310
						</div>
						<hr/>
						<!--Email-->
						<div class="email">
							<i class="fa fa-envelope-o"></i> Email: ahuerta@grupak.com.mx
						</div>
						<hr/>
					</div>
				</div>

			</div>
		</div>
	</header>
	<!-- .\ End -->
	
	<!-- Pagina en blanco -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero">
					<h2><span>Mesa de ayuda</span> | <?php echo $title ?></h2>
					<div class="bor"></div>
					<p></p>
				</div>
			</div>

			<div class="col-md-2">
				<div class="hero">
					<h2><span>Hidalgo</span></h2>
					<div class="bor"></div>
					<h1><?php  echo $tick_hgo; ?></h1>
					<a class="btn btn-danger" href="index.php?controller=ticket&action=read_ticket&valor=200.79.183.225">Ver mas...</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="hero">
					<h2><span>Toluca</span></h2>
					<div class="bor"></div>
					<h1><?php  echo $tick_tol ?></h1>
					<a class="btn btn-danger" href="index.php?controller=ticket&action=read_ticket&valor=187.130.3.5">Ver mas...</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="hero">
					<h2><span>Cuernavaca</span></h2>
					<div class="bor"></div>
					<h1><?php  echo $tick_cva; ?></h1>
					<a class="btn btn-danger" href="index.php?controller=ticket&action=read_ticket&valor=187.188.90.158">Ver mas...</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="hero">
					<h2><span>Corporativo</span></h2>
					<div class="bor"></div>
					<h1><?php  echo $tick_corp; ?></h1>
					<a class="btn btn-danger" href="index.php?controller=ticket&action=read_ticket&valor=189.240.241.99">Ver mas...</a>
				</div>
			</div>

			<div class="col-md-2">
				<div class="hero">
					<h2><span>Abastecedoras</span></h2>
					<div class="bor"></div>
					<h1><?php  echo $tick_abas; ?></h1>
					<a class="btn btn-danger" href="index.php?controller=ticket&action=read_ticket&valor=abas">Ver mas...</a>
				</div>
			</div>

		</div>
	</div>

	<div class="bor"></div>

	<?php //include'footer.php';?>

	<!-- jQuery -->
	<script type="text/javascript" src="view/js/query/jquery-min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="view/js/bootstrap/bootstrap.min.js"></script>
	<!-- DATA TABLES -->
	<script type="text/javascript" src="view/plug/datatables/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="view/plug/datatables-plugins/dataTables.bootstrap.js"></script>
	<script type="text/javascript" src="view/plug/datatables-responsive/dataTables.responsive.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){ 
  			setTimeout(function(){ 
			location.href = "index.php";
			}, 10000); 
		});
	</script>
	
</body>
</html>