<?php 
	$menu_activo = "clientes";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Abonos</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
	</head>
	
	<body>
		<?php include ("mennu.php")?>
		<main class="mt-5">
			<form id="datos_cliente"> 
			<div class="container">
				
					<div class="row">
						<div class="col-12">
							<h2 ><center> {Nombre Cliente} </center></h2>
						</div>
					</div>
					<div class="row">
						<div class=" col-6">
							<p>Pago Acordado</p> <br>
							<p>Pago Agendado</p> <br>
							<p>Saldo</p> <br>
							
						</div>
						<div class="col-5">
							<p>${Importe_ventas}</p> <br>
							<p>{Fecha}</p> <br>
							<p>${Saldo}</p> <br>
						</div>
						<div class="col-1">
							
							<a href="abonos_insertar.php" class="btn btn-info btn-sm my-4" ><i class="fa fa-plus"></i></a>
							<a href="abonos_pago.php" class="btn btn-info btn-sm my-4" ><i class="fa fa-minus"></i></a>
						</div>
					</div>
					</div>
				</form>	
				
				
				
				<div class="container">
				
				<div class="row">
					<div class="col-12">
						<h2>Transacciones</h2>
					</div>
				</div>
				<div class="row" id="tabla_abonos">
					<div class="col-3">
						<p>{fecha}</p>
					</div>
					<div class="col-6">
						<p>{concepto}</p>
					</div>
					<div class="col-3">
						<h5>{saldo anterior}<br>
							{saldo restante}</h5>
					</div>
				</div>
				
				
			</div>
			
			
			
			
		</main>

	
	
	
	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	
</body>
</html>	