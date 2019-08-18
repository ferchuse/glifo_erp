<?php
	
	
	
	
			include("conexi.php");
			$id_ventas=$_GET['id_ventas'];
	$link=Conectarse();
	$consulta= "select * from ventas LEFT JOIN clientes using (id_clientes) left JOIN abonos using (id_clientes)
	where id_ventas=$id_ventas;";
	
	$result2= mysqli_query($link,$consulta);
	if($result2){
		$fila=mysqli_fetch_assoc($result2);
			$id_clientes=$fila['id_clientes'];
			$id_ventas=$fila['id_ventas'];
			$nombre_clientes = $fila['nombre_clientes'];
			$fecha_ventas = $fila["fecha_ventas"];
			$saldo_ventas = $fila["saldo_ventas"];
			$anticipo_ventas = $fila["anticipo_ventas"];
			$importe_total_ventas = $fila["importe_total_ventas"];
			
		
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
		<title>Abonos</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="lib/toastr.css" rel="stylesheet">
		
	</head>
	<body>
		<?php include("mennu.php")?>
		<!--Main Navigation-->
		<!--Main layout-->
		<!--Main container-->
		<main class="mt-5">
			<form id="abonos_pago"> 
			<input  hidden name="id_clientes" id="id_clientes" type="number" value="<?php echo $id_clientes?>">
			<input  hidden name="id_ventas" id="id_ventas" type="number" value="<?php echo $id_ventas?>">
			
				<div class="container">					
					<div class= "row">
						<div class="col-4 col-md-8"></div>
						
						<div class="col-8 col-md-4">
							<input  class="form-control"name="fecha_abono" id="fecha_abono" type="date" value="<?php echo date("Y-m-d")?>"></div>
						</div>
				
					</div>
					<div class= "row">
						<div class="col-12 col-ms-12 mb-3">
							<h3><center><?php echo $nombre_clientes?></center></h3>
							
						</div>
					</div>
					
					<div class="container">
					<div class="row">
						<div class="col-3">
							<label>Concepto</label>
							
						</div>
						<div class="col-8">
						
								<input name="concepto" id="concepto" class="form-control" type="text">
							
						</div>				
						</div>				
					
					<div class="row  ">
						
						<div class="col-3 ">
							<label class="my-3" >Saldo Anterior</label> 
						
						</div>
						<div class="col-8">
								<input name="saldo_ventas" readonly type="number" class="form-control my-1"id="saldo_ventas" value="<?php echo $saldo_ventas;?>">
						
						</div>		
					</div>
					
					<div class="row">
					<div class="col-3 ">
						<label class="my-3">(-)Monto</label> <br>
					</div>
					<div class="col-8">
					<input name="cantidad_abono" id="cantidad_abono" class="form-control " type="number">
					</div>
					</div>
					<div class="row">
					<div class="col-3 ">
					<label class="my-2">Saldo Restante</label>
					</div>
					<div class="col-8">
					<input name="importe_total_ventas" readonly type="number" class="form-control my-1"id="importe_total_ventas" value="<?php echo number_format( $saldo_ventas);?>">
					</div>
					</div>
				<div class="row mt-3">	
				<div class="col-6 col-md-6">
							<button type="button " id="guardar" name="guardar"class="btn btn-success " > 
							<i class="far fa-save"> 
								</i> 
							</button>
							
						</div>
						</div>
			
			
			</form>
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
		<script src= "lib/toastr.min.js"> </script>	
			<script src= "js/abonos.js"> </script>
		
		
		
		
	</body>
</html>