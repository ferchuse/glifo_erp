
<!DOCTYPE html>
<html lang="en">
	
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Menu Glifo</title>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="css/mdb.min.css" rel="stylesheet">
		<!-- Your custom styles (optional) -->
		<link href="css/style.css" rel="stylesheet">
		<link href="lib/styles.css" rel="stylesheet">
		<link href="manifest.json" rel="manifest">
	
	</head>
	
	
	<body>
		
		<?php include("mennu.php")?>
		
		<div class="container">
			<div class="row">
				<div class="col-4">
					<input class="form-control" placeholder="Escribe para Buscar" id="buscar_cliente" autocomplete="off">
				</div>
			</div>
		</div>
		
		
		
		<!-- SCRIPTS -->
		<!-- JQuery -->
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="js/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="js/mdb.min.js"></script>
		<script type="text/javascript" src="lib/jquery.autocomplete.min.js"></script>
		<script>
			// $("#buscar_cliente").autocomplete();
			
			var countries = [
				{ value: 'Fernando', data: {id_cliente : 1, tel : "5549050026" , email : "sistemas@glifo.mx"} },
				{ value: 'Pedro', data: {id_cliente : 1, tel : "12312312312" , email : "pedro@hotmail.com"} }
			
				];
				
				$('#buscar_cliente').autocomplete({
					serviceUrl: "Consultas/clientes_autocomplete.php",
					onSelect: function (suggestion) {
						console.log('You selected: ' + suggestion.value + ', ' , suggestion.data);
					}
				});
			
			
			$().ready(onLoad);
			
			
			function onLoad(){
				
				
			}
		</script>
		
	</body>
	
</html>
