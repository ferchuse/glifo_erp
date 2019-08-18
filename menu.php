<?php 
	$menu_activo="";
?>
<header>
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
	<nav class="navbar navbar-expand-lg navbar-dark indigo">
		<div class="container">
			
			<!-- Navbar brand -->
			<!--a class="navbar-brand" href="#">Navbar</a-->
			
			<!-- Collapse button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<!-- Collapsible content -->
			<div class="collapse navbar-collapse" id="menu">
				
				<!-- Links -->
				<ul class="navbar-nav mr-auto">
					<li class="nav-item <?php if($menu_activo == "orden_insertar") echo "active"; ?>" >
						<a class="nav-link" href="orden_insertar.php">Ordenes	</a>
					</li>
					<li class="nav-item <?php if($menu_activo == "clientes") echo "active"; ?>" >
							<a class="nav-link" href="clientes.php">Clientes	</a>
						</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLin" data-toggle="dropdown" >Ventas</a>
						<div class="dropdown-menu dropdown-primary" >
							<a class="dropdown-item nav-item <?php if($menu_activo == "venta_imprimir") echo "active"; ?>" href="venta_imprimir.php">Imprimir venta</a>
							<a class="dropdown-item nav-item <?php if($menu_activo == "venta_insertar") echo "active"; ?>" href="venta_insertar.php">Insertar Ventas</a>
						</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">Reportes</a>
							<div class="dropdown-menu dropdown-primary" >
								<a class="dropdown-item" href="#">Reporte de Ventas</a>
								<a class="dropdown-item" href="#">Reporte de Ordenes</a>
							</div>
						</li>
						
						
					</ul>
					<!-- Links -->
					
					<form class="form-inline">
						<div class="md-form mt-0">
							<input class="form-control mr-sm-2 buscar_cliente" id="buscar_cliente" type="text" placeholder="Search" aria-label="Search">
						</div>
					</form>
				</div>
				<!-- Collapsible content -->
				
			</div>
		</nav>
	</header>
	<?php include("clientes.php");?>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="js/clientes.js"></script>
