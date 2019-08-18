<?php 
	include ("../conexi.php");
	$link=Conectarse();
	$respuesta=array();
		$respuesta[]=5;
	
	$productos_select = "select * from  cotizacion_detalle left join cotizacion using (id_cotizacion) where id_cotizacion= ". $_GET["id_cotizacion"];
	$result= mysqli_query($link,$productos_select);
	
	if($result){
		while($fila=mysqli_fetch_assoc($result)){ 
			$respuesta[]= $fila;
			
		}
		} else{ 
		echo("error".mysqli_error($link)); 
	}
	
	echo json_encode($respuesta);
	
	
?> 