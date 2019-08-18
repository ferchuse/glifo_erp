<?php 
	$mennu_activo= "venta_insertar";
	
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Nueva Venta</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link href="lib/autocomplete.css" rel="stylesheet">
		<link href="manifest.json" rel="manifest">
		<link href="lib/toastr.css" rel="stylesheet">
		
	</head>
	<body>
		<?php include("mennu.php")?>
		<!--Main Navigation-->
		<!--Main layout-->
		<!--Main container-->
		<main class="mt-5 " >
			<div class="container col-12">
				<!-- Nav tabs -->
				<ul class="nav nav-pills nav-justified" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="pill" href="#cliente">> Cliente</a>
					</li>
					<li class="nav-item">
						<a class="nav-link"  data-toggle="pill" href="#detalles">> Detalles de Venta</a>
					</li>
				</ul>
			</div>
			<!-- Tab panes --> 
			<div class="tab-content">
				<div id="cliente" class="container tab-pane active col-12"><br>
					
					<form id="form_cliente" autocomplete="off" action="guardar.php">
						<div class= "row">
							<div class = "col-12 col-md-8 mb-4">
								<input name="id_clientes" readonly type="text" class="form-control my-1" autocomplete="off" id="id_clientes"  maxlength="30">
								<input name="nombre_clientes" required type="text" class="form-control my-1" autocomplete="off" id="nombre_clientes" placeholder="Nombre" maxlength="30">
								<input name="tel_clientes" type="tel" class="form-control my-1" id="tel_clientes"  placeholder="Telefono" maxlength="30">
								<input name="correo_clientes" type="email" class="form-control my-1" id="correo_clientes"  placeholder="Correo Electronico @" maxlength="30">
								<button class=" btn btn-success mt-2 float-right" id="sig">
									<i class="fa fa-arrow-right"></i>
									Siguiente
								</button>	
							</div>
						</div>
					</form>
					
					
				</div>
				<div id="detalles" class="container tab-pane fade col-12"><br>
					
					<form id="form_venta_detalle" autocomplete="off">
						<div class="form group">
							<label id="fec">Fecha</label>
							<input name="fecha_ventas" type="date" class="form-control" form="form_venta_detalle"  id= "fecha_ventas" value="<?php echo date("Y-m-d");?>">
						</div>
						
						<div id="div_conceptos">
							<div class="form-row border fila_concepto my-3 p-2" >
								<input  hidden name= "existencia_anterior[]"  type="number" class="form-control existencia_anterior" >
								<input  hidden name= "existencia_actual[]"  type="number"  class="form-control existencia_actual" >
								<input  hidden name= "id_producto[]"  type="number" class="form-control id_producto" >
								
								<div class="col-4 col-sm-2 ">
									<input value="1" name= "cantidad[]" type="number" class="form-control cantidad"  placeholder="Cantidad">
								</div>
								<div class="col-4 col-sm-2 ">
									<input  name="precio[]" type="number" class="form-control precio"  placeholder="Precio">
								</div>
								<div class="col-4 col-sm-2 ">
									<input name="importe[]" type="number" class="form-control importe "  placeholder="Importe" readonly>
								</div>
								<div class="col-12 col-sm-6 ">
									<input  name= "descripcion[]" id= "descripcion" type="text" class="form-control  descripcion" placeholder="Descripción">
								</div>
								<div  class="col-6 ">
									<input   name= "pesos_ganancia[]" id= "pesos_ganancia" type="number" class="form-control pesos_ganancia" placeholder="Ganancia Pesos">
								</div>
								<div  class="col-6 " > 
									<input  name= "porc_ganancia[]"  type="number"  class="form-control porc_ganancia" placeholder="Ganancia Porc">
								</div>
							</div>
						</div>
						
						<div id="div_conceptos">
							<div class="form-row border fila_concepto my-3 p-2" >
								<input  hidden name= "existencia_anterior[]"  type="number" class="form-control existencia_anterior" >
								<input  hidden name= "existencia_actual[]"  type="number"  class="form-control existencia_actual" >
								<input  hidden name= "id_producto[]"  type="number" class="form-control id_producto" >
								
								<div class="col-4 col-sm-2 ">
									<input value="1" name= "cantidad[]" type="number" class="form-control cantidad"  placeholder="Cantidad">
								</div>
								<div class="col-4 col-sm-2 ">
									<input  name="precio[]" type="number" class="form-control precio"  placeholder="Precio">
								</div>
								<div class="col-4 col-sm-2 ">
									<input name="importe[]" type="number" class="form-control importe "  placeholder="Importe" readonly>
								</div>
								<div class="col-12 col-sm-6 ">
									<input  name= "descripcion[]" id= "descripcion" type="text" class="form-control  descripcion" placeholder="Descripción">
								</div>
								<div  class="col-6 ">
									<input   name= "pesos_ganancia[]" id= "pesos_ganancia" type="number" class="form-control pesos_ganancia" placeholder="Ganancia Pesos">
								</div>
								<div  class="col-6 " > 
									<input  name= "porc_ganancia[]"  type="number"  class="form-control porc_ganancia" placeholder="Ganancia Porc">
								</div>
							</div>
						</div>
						
						<div id="div_conceptos">
							<div class="form-row border fila_concepto my-3 p-2" >
								<input  hidden name= "existencia_anterior[]"  type="number" class="form-control existencia_anterior" >
								<input  hidden name= "existencia_actual[]"  type="number"  class="form-control existencia_actual" >
								<input  hidden name= "id_producto[]"  type="number" class="form-control id_producto" >
								
								<div class="col-4 col-sm-2 ">
									<input value="1" name= "cantidad[]" type="number" class="form-control cantidad"  placeholder="Cantidad">
								</div>
								<div class="col-4 col-sm-2 ">
									<input  name="precio[]" type="number" class="form-control precio"  placeholder="Precio">
								</div>
								<div class="col-4 col-sm-2 ">
									<input name="importe[]" type="number" class="form-control importe "  placeholder="Importe" readonly>
								</div>
								<div class="col-12 col-sm-6 ">
									<input  name= "descripcion[]" id= "descripcion" type="text" class="form-control  descripcion" placeholder="Descripción">
								</div>
								<div  class="col-6 ">
									<input   name= "pesos_ganancia[]" id= "pesos_ganancia" type="number" class="form-control pesos_ganancia" placeholder="Ganancia Pesos">
								</div>
								<div  class="col-6 " > 
									<input  name= "porc_ganancia[]"  type="number"  class="form-control porc_ganancia" placeholder="Ganancia Porc">
								</div>
							</div>
						</div>
						
						<div id="div_conceptos">
							<div class="form-row border fila_concepto my-3 p-2" >
								<input  hidden name= "existencia_anterior[]"  type="number" class="form-control existencia_anterior" >
								<input  hidden name= "existencia_actual[]"  type="number"  class="form-control existencia_actual" >
								<input  hidden name= "id_producto[]"  type="number" class="form-control id_producto" >
								
								<div class="col-4 col-sm-2 ">
									<input value="1" name= "cantidad[]" type="number" class="form-control cantidad"  placeholder="Cantidad">
								</div>
								<div class="col-4 col-sm-2 ">
									<input  name="precio[]" type="number" class="form-control precio"  placeholder="Precio">
								</div>
								<div class="col-4 col-sm-2 ">
									<input name="importe[]" type="number" class="form-control importe "  placeholder="Importe" readonly>
								</div>
								<div class="col-12 col-sm-6 ">
									<input  name= "descripcion[]" id= "descripcion" type="text" class="form-control  descripcion" placeholder="Descripción">
								</div>
								<div  class="col-6 ">
									<input   name= "pesos_ganancia[]" id= "pesos_ganancia" type="number" class="form-control pesos_ganancia" placeholder="Ganancia Pesos">
								</div>
								<div  class="col-6 " > 
									<input  name= "porc_ganancia[]"  type="number"  class="form-control porc_ganancia" placeholder="Ganancia Porc">
								</div>
							</div>
						</div>
						
						<div id="div_conceptos">
							<div class="form-row border fila_concepto my-3 p-2" >
								<input  hidden name= "existencia_anterior[]"  type="number" class="form-control existencia_anterior" >
								<input  hidden name= "existencia_actual[]"  type="number"  class="form-control existencia_actual" >
								<input  hidden name= "id_producto[]"  type="number" class="form-control id_producto" >
								
								<div class="col-4 col-sm-2 ">
									<input value="1" name= "cantidad[]" type="number" class="form-control cantidad"  placeholder="Cantidad">
								</div>
								<div class="col-4 col-sm-2 ">
									<input  name="precio[]" type="number" class="form-control precio"  placeholder="Precio">
								</div>
								<div class="col-4 col-sm-2 ">
									<input name="importe[]" type="number" class="form-control importe "  placeholder="Importe" readonly>
								</div>
								<div class="col-12 col-sm-6 ">
									<input  name= "descripcion[]" id= "descripcion" type="text" class="form-control  descripcion" placeholder="Descripción">
								</div>
								<div  class="col-6 ">
									<input   name= "pesos_ganancia[]" id= "pesos_ganancia" type="number" class="form-control pesos_ganancia" placeholder="Ganancia Pesos">
								</div>
								<div  class="col-6 " > 
									<input  name= "porc_ganancia[]"  type="number"  class="form-control porc_ganancia" placeholder="Ganancia Porc">
								</div>
							</div>
						</div>
						
						<div id="div_conceptos">
							<div class="form-row border fila_concepto my-3 p-2" >
								<input  hidden name= "existencia_anterior[]"  type="number" class="form-control existencia_anterior" >
								<input  hidden name= "existencia_actual[]"  type="number"  class="form-control existencia_actual" >
								<input  hidden name= "id_producto[]"  type="number" class="form-control id_producto" >
								
								<div class="col-4 col-sm-2 ">
									<input value="1" name= "cantidad[]" type="number" class="form-control cantidad"  placeholder="Cantidad">
								</div>
								<div class="col-4 col-sm-2 ">
									<input  name="precio[]" type="number" class="form-control precio"  placeholder="Precio">
								</div>
								<div class="col-4 col-sm-2 ">
									<input name="importe[]" type="number" class="form-control importe "  placeholder="Importe" readonly>
								</div>
								<div class="col-12 col-sm-6 ">
									<input  name= "descripcion[]" id= "descripcion" type="text" class="form-control  descripcion" placeholder="Descripción">
								</div>
								<div  class="col-6 ">
									<input   name= "pesos_ganancia[]" id= "pesos_ganancia" type="number" class="form-control pesos_ganancia" placeholder="Ganancia Pesos">
								</div>
								<div  class="col-6 " > 
									<input  name= "porc_ganancia[]"  type="number"  class="form-control porc_ganancia" placeholder="Ganancia Porc">
								</div>
							</div>
						</div>
						
						<div id="div_conceptos">
							<div class="form-row border fila_concepto my-3 p-2" >
								<input  hidden name= "existencia_anterior[]"  type="number" class="form-control existencia_anterior" >
								<input  hidden name= "existencia_actual[]"  type="number"  class="form-control existencia_actual" >
								<input  hidden name= "id_producto[]"  type="number" class="form-control id_producto" >
								
								<div class="col-4 col-sm-2 ">
									<input value="1" name= "cantidad[]" type="number" class="form-control cantidad"  placeholder="Cantidad">
								</div>
								<div class="col-4 col-sm-2 ">
									<input  name="precio[]" type="number" class="form-control precio"  placeholder="Precio">
								</div>
								<div class="col-4 col-sm-2 ">
									<input name="importe[]" type="number" class="form-control importe "  placeholder="Importe" readonly>
								</div>
								<div class="col-12 col-sm-6 ">
									<input  name= "descripcion[]" id= "descripcion" type="text" class="form-control  descripcion" placeholder="Descripción">
								</div>
								<div  class="col-6 ">
									<input   name= "pesos_ganancia[]" id= "pesos_ganancia" type="number" class="form-control pesos_ganancia" placeholder="Ganancia Pesos">
								</div>
								<div  class="col-6 " > 
									<input  name= "porc_ganancia[]"  type="number"  class="form-control porc_ganancia" placeholder="Ganancia Porc">
								</div>
							</div>
						</div>
						
						<div class="row">
							<div class="col-12 col-sm-6 float-sm-right">
								<button type="button" class="btn btn-sm btn-success btn-block" id="btn_agregar_concepto">
									+ Agregar
								</button>
							</div>
						</div>
						
						<div class="row mt-3">
							<div class="col-10 col-md-4">
								<center><label>Anticipo:</label></center>
								<div class="input-group ">
									<div class="input-group-prepend">
										<span class="input-group-text">$</span>
									</div>
									<input name="anticipo_ventas" type="number" class="form-control anticipo mt-0" id="anticipo" value="0">
									</div>
								</div>
								<div class="col-10 col-md-4">
									<center><label>Saldo:</label></center>
									<div class="input-group mb-3 ">
										<div class="input-group-prepend">
											<span class="input-group-text">$</span>
										</div>
										<input name="saldo_ventas" type="number" class="form-control saldo mt-0" id="saldo">
									</div>
								</div>
								<div class="col-10 col-md-4">
								<label>Importe Total:</label></center>
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">$</span>
									</div>
									<input name="importe_total_ventas" type="number" class="form-control mt-0" id="importe_total" >
								</div>
								<div class="form-group">
									<label>Ganancia</label>
									<input  name="pesos_ganancia_ventas" type="number" class="form-control pesos_ganancia_ventas mt-0" id="pesos_ganancia_ventas" >
								</div>
							</div>
						</div> 
						
						<div class="row">
							<div class="col-12">
								<div class="form-check">
									<label class="form-check-label" for="check1">
										<input type="checkbox" class="form-check-input" id="acredito" name="acredito" >Crédito
									</label>
								</div>
							</div>
							
							<div class="col-12">
								<div class="form-group" id="campos_credito">
									<label>Pago Acordado:</label>
									<input id="pago_acordado" name= "pago_acordado" class="form-control my-1" type="number">
									<label>Cantidad Pagos:</label>
									<input id="cantidad_pagos" name= "cantidad_pagos" class="form-control my-1" type="number">
								</div>
							</div>
							
							
						</div>
						<div class="row">
							<div class="col-12">
								<button class="btn btn-success mt-2 btn-block"  id="guardar">Guardar</button>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</main>
	
	
	
	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script  src="js/popper.min.js"></script>
	<script  src="js/bootstrap.min.js"></script>
	<script  src="js/mdb.min.js"></script>
	
	<script src= "lib/jquery.autocomplete.min.js"> </script>
	<script src= "lib/toastr.min.js"> </script>	
	<script src= "js/ventas_insertar.js"> </script>
	<script>
		$(document).ready(onLoad);
		
		function onLoad(){
			
			$("#nombre_clientes").autocomplete({ 
				serviceUrl: "Consultas/clientes_autocomplete.php",   
				onSelect: function(eleccion){
					console.log("Elegiste",eleccion );
					$("#tel_clientes").val(eleccion.data.tel_clientes)
					$("#correo_clientes").val(eleccion.data.correo_clientes)
					$("#id_clientes").val(eleccion.data.id_clientes)
					
				}
			});
			
			$(".descripcion").autocomplete({ 
				serviceUrl: "Consultas/productos_autocomplete.php",
				onSelect: function (eleccion){
					console.log("Elegiste",eleccion );
					
					$(this).closest(".form-row").find(".precio").val(eleccion.data.precio_venta);
					$(this).closest(".form-row").find(".existencia_anterior").val(eleccion.data.existencia);
					$(this).closest(".form-row").find(".pesos_ganancia").val(eleccion.data.pesos_ganancia);
					$(this).closest(".form-row").find(".id_producto").val(eleccion.data.id_producto);
					console.log("costo_compra",eleccion.data.costo_compra);
					console.log("ganancia_pesos",eleccion.data.pesos_ganancia);
					//$(".precio").val(eleccion.data.precio_venta)  
					
					sumarImportes();
					
				}
				
			});
			
		}
	</script>
	
</body>
</html>											