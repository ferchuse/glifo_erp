<?php 
	include ("conexi.php");
	$link=Conectarse();
	
	$mennu_activo= "cotizador";
	
	$id_cotizacion=$_GET['id_cotizacion'];
	$accion=$_GET['accion'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Cotizador</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="lib/autocomplete.css" rel="stylesheet">
		
		<link href="lib/toastr.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<main>
			<?php include("mennu.php")?>
			<form id="cotizador" autocomplete="off">
				<div  class="container-fluid my-5"> 
				
					<div class="row mb-1">
					<div class="d-none d-print-block col-3">
						<div class="view ">
						<img src="img/logo.jpeg" class="card-img-top" alt="">
					</div>
						</div>
						<div class="col-4 col-md-4">
							Cliente<input type="text" class="form-control" id="nombre_cliente" name="nombre_cliente">
						</div>
						<div class="col-3 col-md-3">
							Fecha <input type="date" class="form-control" id="fecha_cotizacion" name="fecha_cotizacion"  value="<?php echo date("Y-m-d");?>" >
						
						</div>
						<div class="col-2 col-md-2">
							Folio Cotización 
							<input type="number" class="form-control" id="id_cotizacion" name="id_cotizacion"  value="<?php echo $id_cotizacion;?>" >
							<input  hidden type="text"  class="form-control"  id="accion" value="<?php echo $accion;?>">
						</div>
						
					</div> 
					</div> 
					
				</div>
				<div class="container-fluid" id="cotizador">
					<div class="row my-2 ">
						<div class="col-2 ">
							<dt>Componente</dt>
						</div>
						<div class="col-6">
							<center><dt>Modelo</dt></center>
						</div>
						<div class="d-print-none col-2">
							<center><dt>Precio</dt></center>
						</div>
						<div class="col-2">
							<center><dt>Cantidad</dt><center>
							</div>
							
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1" id="div_gabinete">
								<div class="col-2">
									<label>Gabinete</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]"  value="gabinete">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="gabinete" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio"  name="precio[]" id="precio_gabinete">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_gabinete" name="cantidad[]" value="1" >
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Fuente de Poder</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="fuente_poder">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="fuente_poder" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio"  name="precio[]" id="precio_fuente_poder">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_fuente_poder" name="cantidad[]" value="1" >
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
								<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Procesador</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="procesador">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="procesador" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" name="precio[]"  id="precio_procesador">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_procesador" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Mother Board</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="mother_board">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="mother_board" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio"  name="precio[]"  id="precio_mother_board">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad px-0" id="cantidad_mother_board" name="cantidad[]" value="1" >
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							
						
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>RAM</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="ram">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="ram" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" name="precio[]"  id="precio_ram"> 
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_ram" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Disco Duro</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="disco_duro">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="disco_duro" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_disco_duro">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_disco_duro" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Disco Duro2</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="disco_duro_2">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="disco_duro_2" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_disco_duro_2">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_disco_duro_2" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>T. Video</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="t_video">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="t_video" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_t_video">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_t_video" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Monitor</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="monitor">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="monitor" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_monitor">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_monitor" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div> 
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Monitor 2</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="monitor_2">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="monitor_2" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_monitor_2">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_monitor_2" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Teclado</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="teclado">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="teclado" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_teclado">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_teclado" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Mouse</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="mouse">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="mouse" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_mouse">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_mouse" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Unidad Optica</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="unidad_optica">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="unidad_optica" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_unidad_optica">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_unidad_optica" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Bocinas</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="bocinas">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="bocinas" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_bocinas">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_bocinas" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Lector de Tarjetas</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="lector_tarjetas">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="lector_tarjetas" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_lector_tarjetas">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_lector_tarjetas" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>No Break</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="no_break">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion" id="no_break" name="descripcion[]">
								</div> 
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_no_break">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_no_break" name="cantidad[]" value="1">
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
							</div>
							
							<div class="row border border-top-0 border-right-0 border-left-0 my-1">
								<div class="col-2">
									<label>Conectividad</label>
									<input hidden type="text" class="form-control etiqueta" name="etiqueta[]" value="conectividad">
								</div>
								<div class="col-6">
									<input type="text" class="form-control my-1 descripcion"  id="conectividad" name="descripcion[]">
								</div>
								<div class="col-2">
									<input type="number" class="d-print-none form-control my-1 precio" id="precio" name="precio[]"  id="precio_conectividad">
								</div>
								<div class="col-2">
									<input type="number" class="form-control my-1 cantidad  px-0" id="cantidad_conectividad" name="cantidad[]" value="1" >
									<input hidden type="number"  class="form-control id_producto" id="id_producto" name="id_producto[]">
								</div>
								
								
								
							</div>
						</div>
						<div class ="row">
							<div class="col-2"></div>
							<div class=" col-8">
							<div class="d-print-none">
								<td class="">Total</td>
								<div class=" input-group mb-3">
									<div class="input-group-prepend">
										<span class="d-print-none input-group-text">$</span>
									</div>
									<input type="number" class="d-print-none form-control  mt-0" id="total_cotizacion" name="total_cotizacion">
								</div>
								</div>
								<td>Venta</td> 
								<div class="input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">$</span>
									</div>
									<input type="number" class="form-control venta mt-0" id="venta" name="venta">
								</div>
								<div class="d-print-none">
								<td>Ganancia</td> 
								<div class="d-print-none input-group mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text">$</span>
									</div>
									<input type="number" class="d-print-none form-control mt-0" id="ganancia" name="ganancia">
								</div>
								<td class="d-print-none">Porcentaje</td> 
								<div class="d-print-none input-group mb-3">
									<div class="d-print-none input-group-prepend">
										<span class="d-print-none input-group-text">%</span>
									</div>
									<input type="number" class="d-print-none form-control mt-0" id="porcentaje" name="porcentaje">
								</div>
								</div>
								<button type="submit" class="btn btn-success mt-0  d-print-none" id="guardar_cotizacion" name="guardar_cotizacion">Guardar</button>
							</div>
							<div class="col-2"></div>
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
			<script src= "lib/jquery.autocomplete.min.js"> </script>
			<script src= "lib/toastr.min.js"> </script>	
			<script src="js/cotizador.js"></script>
			<script>
				$(document).ready(onLoad);
				
				function onLoad(){
				
					$(".descripcion").autocomplete({
						serviceUrl: "Consultas/cotizador_autocomplete.php",
						onSearchStart: function (query) {
							console.log("onSearchStart()");
							console.log(query);
							console.log($(this));
							$(this).addClass("buscando");
						},
						onSearchComplete: function (query, suggestions) {
							console.log("onSearchComplete()");
							// console.log($(this));
							$(this).removeClass("buscando");
						},
						onSelect: function (eleccion){
							console.log("Elegiste",eleccion );
							
								
							// poner cantidad 1
							
							$(this).closest(".row").find(".cantidad").val(1);
					
							$(this).closest(".row").find(".precio").val(eleccion.data.precio_compra);
							$(this).closest(".row").find(".id_producto").val(eleccion.data.id_producto);
							$(this).val(eleccion.data.descripcion);
							calcularTotal(); 
							console.log("id_producto",eleccion.data.id_producto);
							
						}
					});
				}
			</script>
			
			
		</body>
	</html>					