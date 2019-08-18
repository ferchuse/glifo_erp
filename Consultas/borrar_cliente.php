
<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta = array();
	
	$id_clientes=$_GET['id_clientes'];
	$delete="DELETE FROM clientes  where id_clientes= $id_clientes;";
		if(mysqli_query($link,$delete)){  
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje_eliminar"] = "eliminado Correctamente Clientes";
				
				
				
			
			}
			else{ 
				$respuesta["estatus"] = "ERROR clientes";
				$respuesta["mensaje"] = mysqli_error($link);

		}
		
	echo json_encode($respuesta);
	 ?>
