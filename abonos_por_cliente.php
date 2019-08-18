<?php 
	$menu_activo = "abono_por_cliente";
	include("conexi.php");
	$link=Conectarse();
	$id_ventas=$_GET['id_ventas'];
	$consulta= "SELECT * from ventas LEFT JOIN clientes using (id_clientes) left JOIN abonos using (id_clientes)
	where id_ventas=$id_ventas;";
	
	$result2= mysqli_query($link,$consulta);
	$result= mysqli_query($link,$consulta);

	$fila=mysqli_fetch_assoc($result2);
		$id_clientes=$fila['id_clientes'];
		$fecha_abono=$fila['fecha_abono'];
		$id_ventas=$fila['id_ventas'];
		$nombre_clientes = $fila['nombre_clientes'];
		$fecha_ventas = $fila["fecha_ventas"];
		$saldo_ventas = $fila["saldo_ventas"];
		$anticipo_ventas = $fila["anticipo_ventas"];
		$pago_acordado = $fila["pago_acordado"];
	$importe_total_ventas = $fila["importe_total_ventas"];
	
	if($result){
		
		
		
		
		
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
								<h2 ><center> <?php echo $nombre_clientes;?> </center></h2>
							</div>
						</div>
						<div class="row">
							<div class=" col-4">
								<p>Pago Acordado</p> <br>
								<p>Pago Agendado</p> <br>
								<p>Saldo</p> <br>
								
							</div>
							<div class="col-4">
								<p>$<?php echo number_format($fila['pago_acordado']);?></p> <br>
								<p><?php echo date("d/M/Y",strtotime($fecha_ventas));?></p> <br>
								
								<p>$<?php echo number_format($saldo_ventas);?></p> <br>
							</div>
							<div class="col-4">
								
								<a href="abonos_cargo.php?id_ventas=<?php echo $fila['id_ventas']; ?>" class="btn btn-info btn-sm my-4" title="Agregar cargo"><i class="fa fa-plus"></i></a><br>
								<a href="abonos_pago.php?id_ventas=<?php echo $fila['id_ventas']; ?>" class="btn btn-warning btn-sm my-4"title="Abonar" ><i class="fa fa-minus"></i></a>
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
					<?php while($fila=mysqli_fetch_assoc($result)){?>
						<?php if($fila['saldo_anterior']!=0){ ?>
						<div class="row border" id="tabla_abonos"> 
							<div class="col-4">
								
								<p><?php echo date("d/M/Y", strtotime($fila['fecha_abono']));?></p> <br>
								
							</div>
							<div class="col-3">
								<p><?php echo $fila['concepto'];?></p>
							</div>
							<div class="col-5 text-right"> 
								<h6>Anterior$: <?php echo number_format($fila['saldo_anterior']);?><br>
									     Abono$: <?php echo number_format( $fila['cantidad_abono']);?><br>
										 Resta$: <?php echo number_format($fila['saldo_restante']);?>
								</h6>
								
							</div>
							</div>
					<?php
						}
						}
					}   
					else{ 
						echo("error".mysqli_error($link)); 
					}
					
					?>
				
					
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