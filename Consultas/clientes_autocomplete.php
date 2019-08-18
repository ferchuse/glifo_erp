<?php
	
	include ("../conexi.php");
	header("Content-Type: application/json");
	
	$link=Conectarse();
	
	$respuesta  =array() ;
	$query=$_GET["query"]; 
	
	$clientes_select = "SELECT * FROM clientes WHERE nombre_clientes LIKE '%$query%'";
	$result= mysqli_query($link,$clientes_select);
	if($result){
		while($fila=mysqli_fetch_assoc($result)){
			
			$respuesta ["suggestions"][]  = array(
				
			
				 "value" => $fila["nombre_clientes"], "data" => $fila 
				
			);
		}
	}	
	else $respuesta["result"] = "Error". mysqli_error($link);
		
		$respuesta["clientes_select"] = $clientes_select;
		echo json_encode($respuesta );
		
		
		//JSON {"nombre": "juan"}, lista.nombre = "juan" .... lista["nombre"] = "juan"
		//PHP array("nombre" => "juan")
		// 
	?>	
	
	