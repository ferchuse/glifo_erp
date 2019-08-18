<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta=array();
	
	$clientes_select = "select * from  clientes where id_clientes=".$_GET["id_clientes"];
	
	$result= mysqli_query($link,$clientes_select);
	
	if($result){
		while($fila=mysqli_fetch_assoc($result)){ 
			$respuesta= $fila;
			
		}
		} else{ 
		echo("error".mysqli_error($link)); 
	}
	
	echo json_encode($respuesta);
	
	
?> 