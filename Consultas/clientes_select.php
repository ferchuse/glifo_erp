<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta=array();
	
	$clientes_select = "select * from ventas LEFT JOIN clientes using (id_clientes) order by saldo_ventas DESC;";
	$sumaTotalClientes="select sum(saldo_ventas) as sumaTotal from ventas LEFT JOIN clientes using (id_clientes);";
	
	$result= mysqli_query($link,$clientes_select);  

	
	if($result){
	while($fila=mysqli_fetch_assoc($result)){ ?>

	<div class="row z-depth-2 mb-2 buscar">
					<div class="col-7 ">
					<h4><p><?php echo $fila["nombre_clientes"]; ?><p> <br></h4>
					
						<h5>Saldo $<?php echo number_format( $fila["saldo_ventas"]);?></h5> 
						
					</div>
					

					<div class="col-2 ">
						<button data-id_clientes="<?php echo $fila["id_clientes"]; ?>"  type="button" class="btn btn-warning btn-sm editar" >
						<input hidden type="number" name="id_ventas" id="id_ventas" class="form-control id_ventas" value="<?php echo $fila["id_ventas"]; ?>">
						<!--el data nos permite poner atributos personalizados !-->
							<i class="fas fa-edit  "></i>
						
						
					</button>
				</div>
				
				<!--<div class="col-2">
						<button type="submit"  id="borrar_cliente" name="borrar_cliente"class="btn btn-danger btn-sm borrar">
						
							<i class="fas fa-trash-alt  "></i>
					
						
					</button>
				</div>-->
				<div class="col-2">
					<a  class="btn btn-info btn-sm" href="abonos_por_cliente.php?id_ventas=<?php echo $fila["id_ventas"]; ?> ">
					<i class="fas fa-dollar-sign"></i> </a>
					
					</div>
				
				
				
		</div>
		

		<?php
		}
		} else{ 
		echo("error".mysqli_error($link)); 
		}
	
	
?> 
