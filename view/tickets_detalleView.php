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
					<h2><span>Mesa de ayuda</span> | <?php echo $title ?></h2>
					<div class="bor"></div>
					<p></p>
				</div>
			</div>
			<div class="col-md-12">
				<a class="btn btn-danger" href="index.php">Menú Principal ...</a>
			</div>
		</div>
	</div>
	
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<table id="myTable" class="table">
		                <thead class="thead-dark">
		                    <tr>
		                    	<th scope="col">#</th>
		                        <th scope="col">#Ticket</th>
		                        <th scope="col">Descripción</th>
								<th scope="col">Propietario</th>
								<th scope="col">Fecha de Asignacion</th>
								<th scope="col">Fecha de Cierre</th>
								<th scope="col">Responsable Tick</th>
								<th scope="col">Estatus</th>
								
		                    </tr>
		                </thead>
		                <tbody>
		                	<?php 
		                		$cont = 1;
		                		if(is_array($array)){
		                			foreach ($array as  $value) {
		                				echo "<tr>";
		                					echo "<th>".$cont."</th>";
											echo "<th>".$value[0]."</th>";
											echo "<th>".strtoupper(utf8_encode($value[1]))."</th>";
											echo "<th>".strtoupper(utf8_encode($value[17]))."</th>";
											echo "<th>".strtoupper($value[4])."</th>";
											echo "<th>".$value[3]."</th>";
											echo "<th>".strtoupper(utf8_encode($value[11]))."</th>";
											if($value[7] == 'Cerrado'){
												echo "<th style='color:red;'>".$value[7]."</th>";
											}else if($value[7] == 'Proceso') {
												echo "<th style='color:orange;'>".$value[7]."</th>";
											}else if ($value[7] == 'Abierto'){
												echo "<th style='color:green;'>".$value[7]."</th>";
											}
		                				echo "</tr>";
		                				$cont++;
		                			}
		                		}else{
		                		echo "<h1>No Existen Tickets Abiertos! [:)]</h1>";
		                		}
		                	?>     
		                </tbody>
		            </table>
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
	<script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript">
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>