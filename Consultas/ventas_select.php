<?php 
	include ("../conexi.php");
	$link=Conectarse();
	
	$id_ventas=$_GET['id_ventas'];
	
	$ventas_select = "SELECT
	*
	FROM
	ventas
	
	LEFT JOIN ventas_detalle
	USING(id_ventas)
	
	WHERE
	id_ventas = $id_ventas;";
	
	$result= mysqli_query($link,$ventas_select);
	if($result){
	?>
	<div class ="container">

			<div class="row">
			
				<div class="col-12" > 
					<table class="table table-bordered">
						
						<thead class = "thead-light">
							<tr>
								<th >Cantidad</th>
								<th class="col-sm-4" >Descripcion</th>
								<th >Costo/u</th>
								<th >Importe</th>
							</tr>
						</thead>
						<tbody>
							<?php while($fila=mysqli_fetch_assoc($result)){ ?>
								<tr>
									<td><?php echo $fila["cantidad"]; ?> </td>
									<td><?php echo $fila["descripcion"]; ?> </td>
									<td><?php echo $fila["precio"]; ?> </td>
									<td><?php echo $fila["importe"]; ?> </td>
								</tr>
								<?php
								}
							?>
							
						</tbody>
					</table>
					
				</div>
				
			</div>
		</div>
		
		
		<?php
			
			} else{ 
			echo("error".mysqli_error($link)); 
		}
		
		
	?> 	