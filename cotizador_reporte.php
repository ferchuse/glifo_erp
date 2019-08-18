<?php 
	$mennu_activo= "reporte_cotizador";
	include("conexi.php");
	$link=Conectarse();
	$respuesta=array();
 //$saldos_ventas="select sum(saldo_ventas) as saldos_ventas from ventas;";
// $result_total_ventas= mysqli_query($link,$saldos_ventas);
 //$fila_saldo=mysqli_fetch_assoc($result_total_ventas);
 
 //$pagado_ventas="select sum(importe_total_ventas)  as pagado_ventas, sum(pesos_ganancia_venta) as ganancia_pesos from ventas;";
 //$result_pagado_ventas=mysqli_query($link,$pagado_ventas);
	//$fila_pagado=mysqli_fetch_assoc($result_pagado_ventas);
	$consulta="SELECT
	*
FROM
 cotizacion

ORDER BY id_cotizacion DESC
; ";
	
	
	
	
	$result3= mysqli_query($link,$consulta);
	
	if($result3){
		
		

	
	}
	else{ 
		echo("error".mysqli_error($link)); 
		
	}
	echo json_encode($respuesta);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Reporte de Cotizaciones</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link href="lib/toastr.css" rel="stylesheet">
		
		
	</head>
	<body>
		<?php include("mennu.php")?>
		<!--Main Navigation-->
		<!--Main layout-->
		<!--Main container-->
		<main class="mt-5">
			
			<div id="detalles" >
				<div class="container">
				<div class= "row">
				<div class="col-9 col-md-10">
			
			</div>
				<div class="pmd-floating-action">

						<a href="cotizador.php?accion=insertar"class="btn btn-success ">
							<i class="fa fa-plus"></i></a>
						
					</div>
				
				</div>
				
					<?php while($fila=mysqli_fetch_assoc($result3)){ ?>

						<div class="row my-2 py-1  z-depth-2" id="">
							<div class="col-7  ">
								<p><?php echo date ("d/M/Y",strtotime ( $fila["fecha_cotizacion"]));?></p>
								<h5>
									#<?php echo $fila["id_cotizacion"]; ?> <br>
									<?php echo $fila["nombre_cliente"]; ?><br>
									
								</h5>
							</div>
							<div class="col-5 my-2 text-right">
								<h6 class="">
									Total Cotizacion: $<?php echo number_format($fila["total_cotizacion"]); ?><br>
									Ganancia: $<?php echo number_format($fila["ganancia"]); ?><br>
									Venta: $<?php echo number_format( $fila["venta"]); ?><br>
																	
								</h6>
								
								
								
								
								<a href="cotizador.php?id_cotizacion=<?php echo $fila['id_cotizacion'];?>&accion=actualizar" name="editar_cotizacion"  class="btn btn-warning btn-xs editar_cotizacion">
							
									<i class="fa fa-edit"></i></a>
							</div>

						</div>
					<?php }?>
					
				</div>
				</div>
				 
			</main>
			<!--Main layout-->
			<!--Main layout-->
			<!-- SCRIPTS --> 
			<!-- JQuery -->
			<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
			<!-- Bootstrap tooltips -->
			<script type="text/javascript" src="js/popper.min.js"></script>
			<!-- Bootstrap core JavaScript -->
			<script type="text/javascript" src="js/bootstrap.min.js"></script>
			<!-- MDB core JavaScript -->
			<script type="text/javascript" src="js/mdb.min.js"></script>
			<script src= "lib/toastr.min.js"> </script>	
			
			
			
			
		</body>
	</html>											