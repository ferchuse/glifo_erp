
<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta = array();
	extract ($_POST);
	if($id_clientes == ''){ //Si el cliente es nuevo insertar
	$insert= "INSERT INTO clientes (nombre_clientes ,tel_clientes, email_clientes) VALUES (' $nombre_clientes',' $tel_clientes','$correo_clientes')";
	
	if(mysqli_query($link,$insert)){
		$respuesta["estatus"] = "OK";
		$respuesta["mensaje"] = "Guardado Correctamente";
		$respuesta["id_clientes"] = mysqli_insert_id($link);
		}
	else{ 
		$respuesta["estatus"] = "ERROR";
		$respuesta["mensaje"] = mysqli_error($link);
		
		}
		
	}else{ //Si ya existe, actualizar
			
		$respuesta["id_clientes"] = $id_clientes;
	}
	echo json_encode($respuesta);
	 ?>
