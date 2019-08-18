<?php
	
	include ("../conexi.php");
	header("Content-Type: application/json");
	
	$link=Conectarse();
	
	$respuesta  =array() ;
	$query=$_GET["query"]; 
	
	$productos_select = "SELECT * FROM productos_cotizacion WHERE descripcion LIKE '%$query%' ORDER BY precio_compra ASC";
	$result= mysqli_query($link,$productos_select);
	if($result){
		while($fila=mysqli_fetch_assoc($result)){
			
			$respuesta ["suggestions"][]  = array(
				
			
				 "value" => $fila["descripcion"]."| $".$fila["precio_compra"] , "data" => $fila //concatenar variables con PHP
				 
				
			);
		}
	}	
	else $respuesta["result"] = "Error". mysqli_error($link);
		
		//$respuesta["descripcion"] = $productos_select;
		echo json_encode($respuesta );
		
		
		//JSON {"nombre": "juan"}, lista.nombre = "juan" .... lista["nombre"] = "juan"
		//PHP array("nombre" => "juan")
		// 
	?>	
	
	