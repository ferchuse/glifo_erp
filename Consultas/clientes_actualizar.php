
<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta = array();
	extract ($_POST);
	
	$insert= "UPDATE clientes 
SET nombre_clientes = '$nombre_clientes',
 tel_clientes = '$tel_clientes',
 email_clientes = '$email_clientes'
WHERE id_clientes = $id_clientes";
	
	if(mysqli_query($link,$insert)){
		$respuesta["estatus"] = "OK";
		$respuesta["mensaje"] = "Actualizado Correctamente";
		//$respuesta["id_clientes"] = mysqli_insert_id($link);
		}
	else{ 
		$respuesta["estatus"] = "ERROR";
		$respuesta["mensaje"] = mysqli_error($link);
		
		}
		
	echo json_encode($respuesta);
	 ?>
