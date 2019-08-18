<?php 
	$mennu_activo= "productos_insertar";
	
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Productos</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link href="manifest.json" rel="manifest">
		<link href="lib/toastr.css" rel="stylesheet">
		
	</head>
	<body>
		
		<?php include ("mennu.php")?>
		
		
		<main>		
			<div class="container">
				<form id="productos" name="productos">
					<div class = "row">
						
						<div class="col-md-12">
							
							<br>
							<br>
							<div class="card">
								
								<!--Card image-->
								<div class="view overlay">
									
									<div class="card-body">
										<!--Title-->
										<h4 class="card-title"><center>Inventario</center></h4>
										<input hidden type="number" class="form-control" id="id_producto" name="id_producto">
										
										<div class="form-group">
											<label for="recep">Descripción:</label>
											<input type="text" class="form-control" id="descripcion" name="descripcion">
										</div>
										
										<div class="form-group">
											<label for="fech">Costo Compra:</label>
											<input type="number" class="form-control" id="costo_compra" name="costo_compra">
										</div>
										
										<div class="form-group">
											<label for="desc">Ganancia:</label>
											<input type="number" class="form-control" id="porc_ganancia" name="porc_ganancia">
										</div>
										
										<div class="form-group">
											<label for="dig">Precio Venta:</label>
											<input type="number" class="form-control" id="precio_venta" name="precio_venta">
										</div>
										
										<div class="form-group">
											<label for="tipcom">Existencia:</label>
											<input type="number" class="form-control" id="existencia" name="existencia">
										</div>
									</div>		
									
								</div>
							</div>
							
							
						</div>
					</div>
					<div class="row">
						<div class ="col-md-10"></div>
						<div class ="col-md-2">
							<button type="submit" class="btn btn-success btn-block" id="guardar" name="guardar">Guardar</button>
						</div>
						
						
					</div>
				</form>
			</div>
			
		</main>
		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>
		<script src= "lib/toastr.min.js"> </script>
		<script src= "js/producto_insertar.js"> </script>			
		
	</body>
</html>											