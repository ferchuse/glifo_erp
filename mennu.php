<?php 
	$mennu_activo="";
	?>

<nav class="navbar navbar-expand-lg navbar-dark indigo">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		
		<ul class="navbar-nav mr-auto">
			<li class="nav-item <?php if($mennu_activo == "orden_insertar") echo "active"; ?>" >
				<a class="nav-link" href="orden_insertar.php">Ordenes	</a>
			</li>
			<li class="nav-item <?php if($mennu_activo == "clientes") echo "active"; ?>" >
				<a class="nav-link" href="clientes.php">Clientes	</a>
			</li>
			<li class="nav-item <?php if($mennu_activo == "reporte_venta") echo "active"; ?>" >
				<a class="nav-link" href="venta_reporte.php">Ventas</a>
			</li>
			<li class="nav-item <?php if($mennu_activo == "productos_select") echo "active"; ?>" >
				<a class="nav-link" href="productos_select.php">Productos</a></li>
				<li class="nav-item <?php if($mennu_activo == "cotizador") echo "active"; ?>" >
				<a class="nav-link" href="cotizador.php?accion=insertar">Cotizador</a></li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">Reportes</a>
				<div class="dropdown-menu " >
					<a class="dropdown-item <?php if($mennu_activo == "reporte_cotizacion") echo "active"; ?> " href="cotizador_reporte.php">Reporte de Cotizaciones</a>
					<a class="dropdown-item <?php if($mennu_activo == "movimientos") echo "active"; ?> "  href="movimientos_select.php">Reporte de Movimientos</a>
				</div>
			</li>
			
			
		</ul>
		
	</div>
	<form class="form-inline">
			<div class="md-form mt-0">
				<input name="buscar" id="buscar"  class="form-control mr-sm-2 " type="text" placeholder="Buscar" >
			</div>
			
		</form>
</nav>

