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
	<!-- Font awesome CSS -->
	<link rel="stylesheet" type="text/css" href="view/fontawesome-free/css/all.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/style.css">
	<!-- Grupak-Blue -->
	<link rel="stylesheet" type="text/css" href="view/css/grupak/grupak-blue.css">
	<!--Favicon Grupak-->
	<link rel="shortcut icon" href="view/img/favicon/grupak-favicon.ico">
	<!-- Table -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
					<h2><span>Reporte de Tickets para: </span> <?php echo $title ?></h2>
					<div class="bor"></div>
					<p></p>
				</div>
			</div>
			<div class="col-md-12">
				<a class="btn btn-warning" href="index.php">Menú Principal ...</a>
			</div>
			
			<div class="col-md-12">
				<?php $total = $created +  $assigned ?>
				<h1>Mis Tickets Creados <?php echo $created; ?></h1>
				<div class="progress">
					<div class="progress-bar" role="progressbar" style="width: <?php echo $created; ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?php echo $total;?>"></div>
				</div>

				<h1>Mis Tickets Asignados <?php echo $assigned; ?></h1>
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: <?php echo $assigned; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total;?>"></div>
				</div>

				<h1>Mis Tickets Atendidos <?php echo $less = $assigned-$created ?></h1>
				<div class="progress">
  					<div class="progress-bar" role="progressbar" style="width: <?php echo $less; ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="<?php echo $total;?>"></div>
				</div>

			</div>

		</div>
	</div>
	
    <!-- Staff -->
	<div class="container-fluid">
			
	</div>
	

	<div class="bor"></div>

	<?php //include'footer.php';?>

	<!-- jQuery -->
	<script type="text/javascript" src="view/js/query/jquery-min.js"></script>
	<!-- Bootstrap JS -->
	<script type="text/javascript" src="view/js/bootstrap/bootstrap.min.js"></script>
	<!-- DATA TABLES -->
	<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>