<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta=array();
	
	$productos_select = "select * from  productos where id_producto=".$_GET["id_producto"];
	
	$result= mysqli_query($link,$productos_select);
	
	if($result){
		while($fila=mysqli_fetch_assoc($result)){ 
			$respuesta= $fila;
			
		}
		} else{ 
		echo("error".mysqli_error($link)); 
	}
	
	echo json_encode($respuesta);
	
	
?> 