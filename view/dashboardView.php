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

		</div>
        <!-- endRow-->
		
		<div class="row">
			<div class="col-md-12">
				<div class="hero">
					<h2><span>Reporte de Tickets</span> | Personal TIC</h2>
					<div class="bor"></div>
				</div>
			</div>
			
<?php
		foreach ($tickStaff as  $value) {
			$staffName = $value[1].' '.$value[9];
			echo "<div class='col-md-4' >";
					echo '<div class="card" style="width: 18rem; margin-bottom:15px;" >
							<div class="card-body">
								<h3 class="card-title">'.strtoupper($value[1]).'</h3>
								<h5 class="card-text">'.strtoupper(utf8_encode($value[9])).'</h5>
								<a href="index.php?controller=staff&action=index&valor1='.$value[0].'&valor2='.$staffName.'" class="btn btn-primary">Ver mas...</a>
							</div>
						</div>';
			echo "</div>";
			
		}
?>
			
		</div>
		<!-- End Row -->

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


</body>
</html>