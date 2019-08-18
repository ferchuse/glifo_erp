<?php
$mennu_activo= "movimientos";


include ("conexi.php");
	$link=Conectarse();
	
	$inventario_select = "select * from movimientos FULL JOIN(productos) using (id_producto) ORDER BY id_movimientos desc ;";
	
	$result= mysqli_query($link,$inventario_select);
	if($result){
	
		
	

?>



<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title> Reporte Movimientos</title>
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
		<?php include("mennu.php")?>
		
		
		<main>	
<div class="mt-5">
	<div class="row">
			<div class="col-12 col-md-9"></div> 
			<div class="col-12 col-ms-3">
			<!-- <button type="button" class="btn btn-success" onclick="location.href='productos_insertar.php'">Nuevo Producto </button> -->
			</div>
			</div>
	<?php while($fila=mysqli_fetch_assoc($result)){ ?>		
			
			<div class="container">
		

	<div class="row y-2 py-1 z-depth-2 buscar">
					<div class="col-4 col-md-5">
					<p><?php echo date("d/M/Y", strtotime($fila["fecha"])); ?></p>
					<h5>
						#<?php echo $fila["id_movimientos"]; ?><br>
						# Producto<?php echo $fila["id_producto"]; ?><br>
						<?php echo $fila["tipo_movimiento"]; ?><br>
						<?php echo $fila["descripcion"]; ?>
					</h5>
					</div>
					<div class="col-2 col-md-2"> 
					
							<h6>
							Ventas
							</h6>
							<p>#<?php echo $fila["id_ventas"]; ?></p>
							<h6>
							Compras
							</h6>
							<p>#<?php echo $fila["id_compras"]; ?></p>
					</div>
					<div class="col-6 col-md-5  text-right">
					<h6>
							Existencia Anterior: <?php echo $fila["existencia_anterior"]; ?><br>
							Cantidad: <?php echo $fila["cantidad"]; ?><br>
							Existencia Actual: <?php echo $fila["existencia_actual"]; ?>
					</h6>
					</div>
					
				</div>
				</div>
	<?php } 
	}
	
	 else{ 
		echo("error".mysqli_error($link)); 
		}?>
			
			</div>	
			
			
		</main>
		
			<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/popper.min.js"></script>
			<!-- Bootstrap core JavaScript -->
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<!-- MDB core JavaScript -->
			<script type="text/javascript" src="js/mdb.min.js"></script>
			<script src="js/ventas_insertar.js"></script>
	</body>	
</html>	