<?php 
	$mennu_activo= "orden_insertar";
?>
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Nueva Orden</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link href="lib/autocomplete.css" rel="stylesheet">
		<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<style>
			
		</style>
	</head>
	
	<body>
		<?php include ("mennu.php")?>
		<main>		
			<div class="container col-12">
				<div class = "row">
					<div class="col-md-6">
						
						<h2>Nueva Orden</h2>
						<div class="card pd-3">
							
							<!--Card image-->
							<div class="view overlay">
								
								<div class="card-body">
									<!--Title-->
									<h4 class="card-title">Datos del Cliente</h4>
									<form>
										<div class="form-group">
											<label>Cliente:</label>
											<div class="input-group ">
																						
												<input  type="text" class="form-control " id="nombre_clientes"  name="clien" autocomplete="off">
											</div>
											
										</div >
										<div class="form-group">
											<label for="telef">Telefono:</label>
											<input type="tel" class="form-control" id="tel_clientes" name="tel">
										</div>
										<div class="form-group">
											<label for="mail">Email:</label>
											<input type="email" class="form-control" id="correo_clientes" name="emal">
										</div>
									</form>
									
									
									
								</div>
							</div>
						</div>
						
					</div>
					
					
					
					<div class="col-md-6 pd-2">
						
						<div class="card">
							
							<!--Card image-->
							<div class="view overlay">
								
								<div class="card-body">
									<!--Title-->
									<h4 class="card-title">Productos</h4>
									
									
									<div class="form-group">
										<label for="recep">Fecha de Recepcion:</label>
										<input type="date" class="form-control" id="pwd" name="frecep">
									</div>
									
									<div class="form-group">
										<label for="fech">Fecha de Compromiso:</label>
										<input type="date" class="form-control" id="pwd" name="fecha">
									</div>
									
									<div class="form-group">
										<label for="desc">Descripción de la Falla:</label>
										<input type="text" class="form-control" id="pwd" name="descp">
									</div>
									
									<div class="form-group">
										<label for="dig">Diagnostico:</label>
										<input type="text" class="form-control" id="pwd" name="diag">
									</div>
									
									<div class="form-group">
										<label for="tipcom">Tipo de Computadora:</label>
										<input type="text" class="form-control" id="pwd" name="tipcomp">
									</div>
									
									<div class="form-group ">
										<label for="marcomp">Marca de la computadora:</label>
										<select name= "Marca" class="form-control" >
											<option value "  ">   Seleccione   </option>
											<option value " Lenovo"> Lenovo</option>
											<option value " HP"> HP</option>
											<option value " Dell"> Dell</option>
											<option value " Acer"> Acer</option>
											<option value " Toshiba"> Toshiba</option>
											<option value " Samsung"> Samsung</option>
											<option value " Alienware"> Alienware</option>
											<option value " Asus"> Asus</option>
											<option value " Gateway"> Gateway</option>
											<option value " Compaq"> Compaq</option>
											<option value " Ensamblada">Ensamblada</option>
										</select>
										
									</div>
									
									<div class="form-group">
										<label for="modcom">Modelo de la Computadora:</label>
										<select name="Modelo" class="form-control">
											<option value "   "> Seleccione</option>
											<option value "Laptop">Laptop</option>
											<option value "Escritorio">Escritorio</option>
										</select>
									</div>
									
									
								</div>		
								
							</div>
						</div>
						
						
					</div>
				</div>
				<div class="row">
					<div class ="col-md-10"></div>
					<div class ="col-md-2">
						<button type="button" class="btn btn-info">Guardar</button>
					</div>
					<div class ="col-md-6"></div>
					
				</div>
			</div>
			
		</main>
		
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>
		<script src= "lib/jquery.autocomplete.min.js"> </script>
		<script>
			$(document).ready(onLoad);
			
			function onLoad(){
				
				
				$("#nombre_clientes").autocomplete({
					serviceUrl: "Consultas/clientes_autocomplete.php",   
					onSelect: function(eleccion){
						console.log("Elegiste",eleccion);
						$("#tel_clientes").val(eleccion.data.tel_clientes)
						$("#correo_clientes").val(eleccion.data.correo_clientes)
					}
				});
				
			}
			
		</script>
	</body>		
</html>