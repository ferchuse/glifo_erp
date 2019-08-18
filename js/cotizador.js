$(document).ready(alCargar);

function alCargar(){
	console.log("alCargar");

	//$("#cotizador .cantidad").keyup(calcularTotal);
	$("#ganancia").keyup(calcularGanancia);
	$("#venta").keyup(calcularVenta);
	$("#porcentaje").keyup(calcularPorcentaje);
	$("#cotizador").submit(guardarCotizacion);

		editar_registro_ajax();

}

function guardarCotizacion(){
	console.log("Guardando");
	if($("#accion").val() == "insertar"){
		$.ajax({
			url:"Consultas/cotizacion_insertar.php",
			method: "Post",
			dataType: "JSON", //La respuesta la interpreta como JSON
			data: $("#cotizador").serialize()
	}).done(termina_guardar_cotizacion).fail(fallo).always(siempre);
		
		 //location.reload(true);
	}
	else{

		
		$.ajax({
			url:" Consultas/cotizador_actualizar.php",
			method: "Post",
			dataType: "JSON", //La respuesta la interpreta como JSON
			data: $("#cotizador").serialize()
		}).done(termina_actualizar_cotizacion).fail(fallo).always(siempre);
	}
 //location.reload(true);
	return false;
	
	
	
	
}

function termina_cotizacion_insertar(respuesta){
	
	
	$("#guardar").prop("disabled", false);	
	
	toastr.success("Cotizacion Guardada");
	
	
}
function fallo(xhr, error,ernum){
	
}
function siempre(respuesta){
	
}



function calcularTotal(){
	

		$cotizacionTotal=0;
	$(".precio").each(calculaTotalCotizacion);  
	
	
	function calculaTotalCotizacion(index, element){

		var precio_compra= Number($(this).val());
		var cantidad = Number($(this).closest(".row ").find(".cantidad").val());
		var precio_compra_red=Math.round(precio_compra);
		var cantidad_red=Math.round(cantidad);
		var importe = precio_compra_red*cantidad_red;
		$cotizacionTotal += importe;
	
		 
		$("#total_cotizacion").val($cotizacionTotal);
		
		 
		console.log("*************Iteración**** #:",index);
		console.log("descripcion:",$(this).closest(".row").find(".descripcion").attr("id"));
		console.log("precio_compra:",precio_compra);
		console.log("cantidad:",cantidad);
		console.log("importe:",importe);
		console.log("cotizacionTotal:",$cotizacionTotal);
		// console.log("tipo de cotizacion:", typeof($cotizacionTotal));
	
		
		
		
		
		
	}
}


function calcularGanancia(){
	
	
	var total_cotizacion=$("#total_cotizacion").val();
	var ganacia_pesos=$("#ganancia").val();
	var ganancia =parseFloat( total_cotizacion)+ parseFloat(ganacia_pesos);
	var porcentaje=(ganacia_pesos/total_cotizacion)*100;
	var porcentaje_red=Math.round(porcentaje);
	var ganancia_red=Math.round(ganancia);
	console.log("porcentaje",porcentaje);
	$("#porcentaje").val(porcentaje_red);
	$("#venta").val(ganancia_red);
	
}
function calcularVenta(){
	
	
	var total_cotizacion=$("#total_cotizacion").val();
	var venta=$("#venta").val();
	var ganancia = parseFloat(venta)-parseFloat( total_cotizacion);
	var porcentaje=(ganancia/total_cotizacion)*100;
	var porc=Math.round(porcentaje);
	var gan=Math.round(ganancia);
	console.log("porcentaje",porcentaje);
	$("#porcentaje").val(porc);
	$("#ganancia").val(gan);
	
}
function calcularPorcentaje(){
	
	var total_cotizacion=$("#total_cotizacion").val();
	var porcentaje=$("#porcentaje").val();
	var ganancia =porcentaje*total_cotizacion/100;
	var venta=parseFloat(ganancia)+parseFloat(total_cotizacion);
	var ganan=Math.round(ganancia);
	var ven=Math.round(venta);
	console.log("porcentaje",porcentaje);
	$("#venta").val(ven);
	$("#ganancia").val(ganan);
	
}
function editar_registro_ajax(){
	console.log("editar_registro_ajax");
	//$("#accion").val("actualizar");
	
	var id_cotizacion = $("#id_cotizacion").val();
	 
	$.ajax({
		url: "Consultas/cotizador_json.php",
		dataType:"JSON",
		data: {"id_cotizacion": id_cotizacion}
		
		
		}).done(function (respuesta){
		
		$.each(respuesta, function(index, componente){
			$("#" + componente.componente).val(componente.descripcion);// #+gabinete =#gabinete
			$("#precio_"+componente.componente).val(componente.precio_compra);
			$("#cantidad_"+componente.componente).val(componente.cantidad);
			//$(this).closest(".row").find("#precio").val(componente.precio_compra);
		$("#total_cotizacion").val(componente.total_cotizacion);
		$("#venta").val(componente.venta);
		$("#ganancia").val(componente.ganancia);
		$("#porcentaje").val(componente.porcentaje);
		$("#nombre_cliente").val(componente.nombre_cliente);
		//$("#total_cotizacion").val(componente.);
		
			    
			// console.log("name",name,"value",value);
		});

	})

	
	
	
	console.log("data atributos", $(this).data());
	
	
}




function termina_actualizar_cotizacion(){
	toastr.success("Cotizacion","Actualizada");
	 // location.reload(true);
	
	}
	function termina_guardar_cotizacion(){
	toastr.success("Cotizacion","Nueva");
	 // location.reload(true);
	
	
}



