<?php 
	$mennu_activo= "reporte_venta";
	include("conexi.php");
	$link=Conectarse();
	$saldos_ventas="select sum(saldo_ventas) as saldos_ventas from ventas;";
	$result_total_ventas= mysqli_query($link,$saldos_ventas);
	$fila_saldo=mysqli_fetch_assoc($result_total_ventas);
	
	$pagado_ventas="select sum(importe_total_ventas)  as pagado_ventas, sum(pesos_ganancia_venta) as ganancia_pesos from ventas;";
	$result_pagado_ventas=mysqli_query($link,$pagado_ventas);
	$fila_pagado=mysqli_fetch_assoc($result_pagado_ventas);
	$consulta="SELECT
	*
	FROM
	ventas
	
	LEFT JOIN clientes
	USING(id_clientes)
	ORDER BY id_ventas DESC
	; ";
	
	
	
	
	$result3= mysqli_query($link,$consulta);
	
	if($result3){
		
		/* $nombre_clientes = $fila['nombre_clientes'];
			$id_ventas = $fila['id_ventas'];
			$saldo_ventas = $fila["saldo_ventas"];
			$anticipo_ventas = $fila["anticipo_ventas"];
			$importe_total_ventas = $fila["importe_total_ventas"];
		$fecha_ventas = $fila["fecha_ventas"];  */
		
		
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
		<title>Reporte de Ventas</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="manifest.json" rel="manifest">
		<link href="lib/toastr.css" rel="stylesheet">
		
	</head>
	<body>
		<?php include("mennu.php")?>
		<!--Main Navigation-->
		<!--Main layout-->
		<!--Main container-->
		<main class="mt-5">
			<div class="pmd-floating-action">
				<button type="button" class="btn pmd-btn-fab pmd-btn-raised pmd-ripple-effect btn-success" onclick="location.href='venta_insertar.php'"><i class="fas fa-plus"></i></button>
			</div>
			<div id="detalles" >
				<div class="container">
					<div class= "row">
						<div class="col-9 col-md-10">
							<h6>Deuda $: <?php  echo  number_format($fila_saldo["saldos_ventas"]); ?> <br>
								Total venta$: <?php  echo number_format( $fila_pagado["pagado_ventas"]); ?>  <br>
								Ganancia$: <?php  echo number_format($fila_pagado["ganancia_pesos"]); ?> 
							</h5>
						</div>
						
						<div class="col-3 col-md-2">
							
						</div>
					</div>
					
					<?php while($fila=mysqli_fetch_assoc($result3)){ ?>
						
						<div class="row my-2 py-1  z-depth-2 buscar" id="">
							<div class="col-7  ">
								<p><?php echo date("d/M/Y", strtotime($fila["fecha_ventas"])) ?></p>
								<h5>
									#<?php echo $fila["id_ventas"]; ?> <br>
									<input hidden name="id_ventas" class ="form-control id_ventas"  id="id_ventas" value="<?php echo $fila["id_ventas"]; ?> ">
									<?php echo $fila["nombre_clientes"]; ?><br>
									<button type="submit" name="eliminar_venta" class="btn btn-danger btn-sm eliminar_venta"><i class="fa fa-trash"></i></button>
								</h5>
							</div>
							<div class="col-5 my-2 text-right">
								<h6 class="">
									Importe: $<?php echo number_format($fila["importe_total_ventas"]); ?><br>
									Pagado: $<?php echo number_format($fila["anticipo_ventas"]); ?><br>
									Saldo: $<?php echo number_format($fila["saldo_ventas"]); ?><br>
									Ganancia: $<?php echo number_format( $fila["pesos_ganancia_venta"]); ?>
								</h6>
								<a href="venta_imprimir.php?id_ventas=<?php echo $fila['id_ventas']; ?>" class="btn btn-info btn-sm" id="id_ventas"><i class="fa fa-print"></i></a>
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
		<!-- JavaScript -->
		<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/alertify.min.js"></script>
		
		<!-- CSS -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/alertify.min.css"/>
		<!-- Default theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/default.min.css"/>
		<!-- Semantic UI theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/semantic.min.css"/>
		<!-- Bootstrap theme -->
		<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.11.2/build/css/themes/bootstrap.min.css"/>
		
		<script >
			$(document).ready(onLoad);
			
			function onLoad(){
				console.log("onLoad")
				$(".eliminar_venta").click(confirmaEliminar);
				
			}
			function confirmaEliminar(){
				console.log("confirmaEliminar()")
				
				alertify.confirm("¿Estas Seguro?")
			}
			
		</script>
		
		
		
	</body>
</html>											