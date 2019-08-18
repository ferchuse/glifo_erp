<?php
	$mennu_activo= "productos_select";
	include ("conexi.php");
	$link=Conectarse();
	
	// $cantidad_producto="SELECT *, precio_venta * existencia  FROM `productos`;";
	$TotalPrecios="SELECT SUM(precio_venta * existencia) as TotalPrecios FROM `productos`;";
	$result_totales= mysqli_query($link,$TotalPrecios);
	$fila_totales=mysqli_fetch_assoc($result_totales);
	
	
	$inventario_select = "SELECT
	*
	FROM
	productos ORDER BY existencia DESC;"; 
	$result_inventario= mysqli_query($link,$inventario_select);	
	if($result_inventario){
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
			<link href="lib/toastr.css" rel="stylesheet">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
			<!-- <link href="css/propeller.min.css" rel="stylesheet"> -->
			


		</head>
		<body>
			<?php include("mennu.php")?>
			<main>	
				<div class="mt-5">
					<div class="container">
			
						<div class="row"> 
									<div class="pmd-floating-action">
								<button type="button" class="btn defualt btn-circle btn-success" id="nuevo" name="nuevo" data-toggle ="modal" data-target="#Modal_producto"><i class="fas fa-plus"></i>
								</button>
						
							</div>
							<div class="col-12 col-md-9"> 
									
								<label> Total Inventario $:<?php echo number_format($fila_totales["TotalPrecios"]); ?></label>
							</div> 

						</div>
						<div class="modal fade " id="Modal_producto">
							<form id="productos" name="productos">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title"><center>Insertar Producto</center></h4> 
											
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>
										<div class="modal-body">
												<div class="card">
													<!--Card image-->
													<div class="view overlay">
														<div class="card-body">
															<!--Title-->
															<h4 class="card-title"><center>Inventario</center></h4>
															<input hidden type="number" class="form-control" id="id_producto" name="id_producto">
															<div class="form-group">
															<input  type="text" hidden class="form-control"  id="accion" value="insertar">
																<label for="recep">Descripción:</label>
																<input type="text" class="form-control" id="descripcion" name="descripcion">
															</div>
															<div class="form-group">
																<label>Costo Compra:</label>
																<input type="number" class="form-control" id="costo_compra" name="costo_compra">
															</div>
															<div class="form-group">
																<label>Ganancia :</label>
																<input type="number" class="form-control" step="any" id="porc_ganancia" name="porc_ganancia">
															</div>
																<div class="form-group">
																<label>Ganancia Pesos:</label>
																<input type="number" step="any" class="form-control" id="pesos_ganancia" name="pesos_ganancia">
															</div>
															<div class="form-group">
																<label>Precio Venta:</label>
																<input type="number" step="any" class="form-control" id="precio_venta" name="precio_venta">
															</div>
															<div class="form-group">
																<label>Existencia:</label>
																<input type="number" class="form-control" id="existencia" name="existencia">
															</div>
														</div>		
													</div>
												</div>
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-success btn-xs" id="guardar" name="guardar">Guardar</button>
											<button type="button" class="btn btn-danger btn-xs cerrar"  id="cerrar" data-dismiss="modal">Cerrar</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
				<?php while($fila=mysqli_fetch_assoc($result_inventario)){ ?>		
				
					<div class="container">
						<div  data-id_producto="<?php echo $fila["id_producto"];?>" class="row y-2 py-1 z-depth-2  buscar" id="producto">
							<div class="col-5 col-md-4">
							<h4>
								<p> <span class="badge badge-info"><?php echo $fila["existencia"]; ?></span> </p>
								</h4>
								<h6>
									<?php echo $fila["descripcion"]; ?><br>
								</h6>
							
							</div>
							<div class="col-3 col-md-4">
								<p>Compra</p>
								<h6>
									$<?php echo number_format($fila["costo_compra"]); ?>
								</h6>
								<p> Ganancia</p>
								<h6>
									%<?php echo $fila["porc_ganancia"]; ?>
								</h6>
								<h6>
									$<?php echo number_format($fila["pesos_ganancia"]); ?>
								</h6>
							</div>
							<div class="col-4 col-md-4 text-right">
								<p>Precio Venta</p>
								<h6>$<?php echo number_format($fila["precio_venta"]); ?></h6>
								
							</div>
						</div>
					</div>
					
					<?php 
						} 
				}
				else{ 
					echo("error".mysqli_error($link)); 
				}?>
		
	</main>
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	<script type="text/javascript" src="js/popper.min.js"></script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/mdb.min.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<script src= "lib/toastr.min.js"> </script>
	<script src= "js/producto_insertar.js"> </script>	

</body>		