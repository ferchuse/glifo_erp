
<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta = array();
	
	$id_ventas=$_GET['id_ventas'];
	$delete="DELETE FROM ventas  where id_ventas= $id_ventas;";
	
		if(mysqli_query($link,$delete)){  
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje_eliminar"] = "eliminado Correctamente";
				
				
				
			
			}
			else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["id"] = $id_ventas;
				$respuesta["mensaje"] = mysqli_error($link);

		}
		$delete_detalles="DELETE FROM ventas_detalle  where id_ventas= $id_ventas;";
				if(mysqli_query($link,$delete_detalles)){  
				$respuesta["estatus"] = "OK";
				$respuesta["mensaje_detalles"] = "detalles eliminado Correctamente";
				
				
				
			
			}
			else{ 
				$respuesta["estatus"] = "ERROR";
				$respuesta["id"] = $id_ventas;
				$respuesta["mensaje"] = mysqli_error($link);

		}
		
	echo json_encode($respuesta);
	 ?>
