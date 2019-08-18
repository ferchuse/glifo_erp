<?php 
	$menu_activo = "clientes";
	include ("conexi.php");
	$link=Conectarse();
	$sumaTotalClientes="select sum(saldo_ventas) as sumaTotal from ventas LEFT JOIN clientes using (id_clientes);";
	$result_totalClientes=mysqli_query($link,$sumaTotalClientes);
	$fila_totalClientes=mysqli_fetch_assoc($result_totalClientes);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Clientes</title>
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
	</head>
	
	<body>
		<?php include ("mennu.php")?>
		<main class="mt-5">
			
			<div class="container">
				
				<div class="row">
					<div class="col-12">
						<h5>Total Deuda <?php echo number_format( $fila_totalClientes["sumaTotal"]);?></h5>
					</div>
					<div class="col-8">
						<h2 ><center> Clientes </center></h2>
					</div>
					
					<div class="pmd-floating-action">
						<button type="button" class="btn btn-success btn-md" data-toggle ="modal" data-target="#Modal_cliente"> <i class="fas fa-plus"></i></button>
						
					</div>
					<div class="col-12"></div>
					
				</div>
				
				<div class="modal fade" id="Modal_cliente">
					<form id="form_cliente">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title"><center>Insertar Cliente</center></h4>
									
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>
								
								<div class="modal-body">
									<label>Id Clientes:</label>
									<input name="id_clientes" type="text" class="form-control"  id="id_clientes" >
									<input hidden type="text" class="form-control"  id="accion" value="insertar">
									<label>Nombre:</label>
									
									<input name="nombre_clientes" type="text" class="form-control"  id="nombre_clientes" >
									<label>Telefono: </label>
									<input name="tel_clientes" type="tel" class="form-control"  id="tel_clientes" >
									<label>Correo: </label>
									<input name="email_clientes" type="tel" class="form-control"  id="email_clientes" >
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class=" fa fa-times"></i></button>
									<button type="submit" class="btn btn-success btn-sm" ><i class=" fa fa-check"></i></button>
									
								</div>
								
							</div>
						</div>
					</form>
				</div>
				
				
				<div id="tabla_clientes" class="mt-4">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<p><center>  <input name="tota" type="text" class="form-control" placeholder="Escribe para buscar" id="tota" ></center></p>
						</div>		
					</div>		
					<h3> <center>Cargando Datos</center> </h3>
					<center><i class=" fa fa-spinner fa-spin"></i></center>
				</div>
				
			</div>
			
			
			
			
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
		<script src="js/clientes.js"></script>
		
		<script src= "lib/toastr.min.js"> </script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
		<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
		
	</body>
	
</html>	