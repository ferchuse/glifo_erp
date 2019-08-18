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
		<style>
			p.normal {
			
			p.italic {
			font-style: italic;
			}
			
			p.oblique {
			font-style: oblique;
			} 
		</style>
	</head>
	
	<body>
		<?php include ("menu.php")?>
		
		
		<main>		
			<div class="container">
				<div class = "row">
					<div class="col-md-6">
						
						<h2>Nueva Orden</h2>
						<div class="card">
							
							<!--Card image-->
							<div class="view overlay">
								
								
								
								
								<div class="card-body">
									<!--Title-->
									<h4 class="card-title">Datos del Cliente</h4>
									<form action="/action_page.php">
										<div class="form-group">
											<label for="pwd">Cliente:</label>
											<div class="input-group sm-1">
												<div class="input-group-prepend">
													<span class="input-group-text"></span>
												</div>											
												<input type="text" class="form-control" id="cliente"  name="clien">
												
											</div>
											
										</div>
										<div class="form-group">
											<label for="nomb">Nombre:</label>
											<input type="text" class="form-control" id="name" name="nom">
										</div>
										<div class="form-group">
											<label for="telef">Telefono:</label>
											<input type="text" class="form-control" id="tel" name="tel">
										</div>
										<div class="form-group">
											<label for="mail">Email:</label>
											<input type="email" class="form-control" id="mail" name="emal">
										</div>
									</form>
									
									
									
								</div>
							</div>
						</div>
						
					</div>
					
					
					<div class="col-md-6">
						<br>
						<br>
						<div class="card">
							
							<!--Card image-->
							<div class="view overlay">
								
								
								
								
								<div class="card-body">
									<!--Title-->
									<h4 class="card-title">Productos</h4>
									
									
									
									
									
									<div class="form-group">
										<label for="recep">Fecha de Recepcion:</label>
										<input type="text" class="form-control" id="pwd" name="frecep">
									</div>
									
									<div class="form-group">
										<label for="fech">Fecha de Compromiso:</label>
										<input type="text" class="form-control" id="pwd" name="fecha">
									</div>
									
									<div class="form-group">
										<label for="desc">Descripcion de la Falla:</label>
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
									
									<div class="form-group">
										<label for="marcomp">Marca de la computadora:</label>
										<input type="text" class="form-control" id="pwd" name="marcom">
									</div>
									
									<div class="form-group">
										<label for="modcom">Modelo de la Computadora:</label>
										<input type="text" class="form-control" id="pwd" name="modcom">
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
		
		
		
	</body>		