<?php 
	$mennu_activo= "venta_imprimir";
	include("conexi.php");
	$link=Conectarse();
	
	$id_ventas=$_GET['id_ventas'];
	
	$cliente_select = "SELECT
	*
	FROM
	ventas
	
	LEFT JOIN clientes
	USING(id_clientes)
	
	WHERE
	id_ventas = $id_ventas;";
	
	$result2= mysqli_query($link,$cliente_select);
	if($result2){
		while($fila=mysqli_fetch_assoc($result2)){
			$nombre_clientes = $fila['nombre_clientes'];
			$tel_clientes = $fila["tel_clientes"];
			$email_clientes = $fila["email_clientes"];
			$fecha_ventas = $fila["fecha_ventas"];
			$saldo_ventas = $fila["saldo_ventas"];
			$anticipo_ventas = $fila["anticipo_ventas"];
			$importe_total_ventas = $fila["importe_total_ventas"];
			
		}
	}
	else{ 
		echo("error".mysqli_error($link)); 
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $id_ventas;?>, <?php echo $nombre_clientes;?>,<?php echo $importe_total_ventas;?></title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		
		<style>
			
			.ticket{
				margin-left:.5cm;
				max-width:10cm !important;
				font-size: 10px !important;
			}
			
			
		</style>
	</head>
	<body>
		
		<?php include("mennu.php")?>
		
		<div  class=" ticket">
			
			<button type="button" class="d-print-none btn btn-success btn-block btn-lg"  id="imprimir" onclick=" window.print();">
				Imprimir
			</button> 		
			<div class="row border ">
				
				<div class="col-4 ">
				</div>
				<div class="col-4 text-center  ">
					<div class="">
						<img src="img/logo.jpeg" class="card-img-top" alt="">
					</div>
				</div>
					
				<div class="col-4 ">
				</div>
				<div class="col-12  text-center h6 small">
					CARR ZUMPANGO LOS REYES #43 , 
					SAN SEBASTIAN, ZUMPANGO, EDO MEX.<br>
					Tel:(01591)106-62-72 <br>
					Cel:5549050026 <br>
					sistemas@glifo.mx
				</div>
				
				<div class="col-12 mt-2 h6">
					<b>Folio: </b><?php echo $id_ventas;?><br>
					<b>Fecha: </b> <?php echo date("d/m/Y", strtotime($fecha_ventas));?>
					
					
				</div>
			</div>	
		
			<div class="h6">
				<div class="row border ">
					<div class="col-12">
						<p>
							Nombre: <?php echo $nombre_clientes;?>
						</p>
						<p>
							Teléfono: 
							<?php echo $tel_clientes;?>
						</p>
						<p>
							Email: 
							<?php echo $email_clientes;?>
						</p>
					</div>	
				</div>	
				<hr>
				
				<?php 
					
					
					$ventas_select = "SELECT
					*
					FROM
					ventas
					
					LEFT JOIN ventas_detalle
					USING(id_ventas)
					
					WHERE
					id_ventas = $id_ventas;";
					
					$result= mysqli_query($link,$ventas_select);
					if($result){
					?>
					
					<div class="row border p-2">
						<div class="col-2" > 
							Cantidad
						</div>	
						<div class="col-6" > 
							Descripción
						</div>	
						<div class="col-2" > 
							Precio U.
						</div>	
						<div class="col-2" > 
							Importe
						</div>	
					</div>
					<?php while($fila=mysqli_fetch_assoc($result)){ ?>
						<div class="row border p-3">
							<div class="col-2"><?php echo $fila["cantidad"]; ?> </div>
							<div class="col-6"><?php echo $fila["descripcion"]; ?> </div> 
							<div class="col-2 text-right"><?php echo number_format($fila["precio"]); ?> </div>
							<div class="col-2 text-right"><?php echo number_format($fila["importe"]); ?> </div>
						</div>
						<?php
						}
					?>
					
					
					<?php
						
					} 
					else{ 
						echo("error".mysqli_error($link)); 
					}
					
					
				?> 	
				
				<div class="row mt-5">
					<div class="col-8 ">
					</div>
					<div class="col-4 ">
						Anticipo: <span class="float-right">$ <?php echo number_format($anticipo_ventas);?></span>
						<hr>
						Saldo: <span class="float-right">$ <?php echo number_format($saldo_ventas);?></span>
						<hr>
						
						Importe Total:<span class="float-right"> $<?php echo number_format($importe_total_ventas);?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		
		<script type="text/javascript" src="js/popper.min.js"></script>
		
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		
		<script type="text/javascript" src="js/mdb.min.js"></script>
		<script>
			$(document).ready(alcargar);
			
			function alcargar()
			{
				
			}
			
		</script>		
		</body>
	</html>																																												