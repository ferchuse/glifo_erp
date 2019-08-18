
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
			<form id="abonos_insertar">
	
				<div class="container">					
					<div class= "row">
						<div class="col-10 col-md-10"></div>
			
				<div class="col-2 col-md-2">
							<button type="button " id="guardar" name="guardar"class="btn btn-success " > 
							<i class="far fa-save"> 
								</i> 
							</button>
							
						</div>
					</div>
					<div class= "row">
						<div class="col-12 ms-112">
							<h3><center>{nombre_clientes}</center></h3>
							
						</div>
					</div>
					
					<div class="row my-4">
						<div class="col-2 ms-2">
							<label>Concepto</label>
							
						</div>
						<div class="col-10 ms-10">
							<span class="border-bottom">
								<input name="concepto" id="concepto" class="form-control" type="text">
							</span>
						</div>				
					</div>
					<div class="row  z-depth-2">
						<div class="col-1 ms-1">
						</div>
						<div class="col-3 ms-3">
							<label >Saldo Anterior</label> <br>
							<label class="my-3">(+)Monto</label> <br>
							<label class="my-2">Total</label>
						</div>
						<div class="col-8 ms-8">
							<p class="my-1">{importe_total}</p> 
							<input name="cantidad_abono" id="cantidad_abono" class="form-control my-2" TYPE="number"> 
							<p class="my-3">{{total}}</p>
						</div>		
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