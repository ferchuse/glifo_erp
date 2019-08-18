
$(document).ready(alcargar);

function alcargar()
{
	
	
	$("#form_cliente").submit(cliente_insertar);
	$("#form_venta_detalle").submit(ventas_insertar);
	console.log ("listo");
	//	$("input").keyup(calcularImporte);
	$("#form_venta_detalle input").keyup(sumarImportes);
}
// function id(){
	
	// $id_cliente=$("#id_clientes").val();
	// if($id==0){
		// cliente_insertar();
	// }
	// else 
	// ventas_insertar();
	// return id_cliente; 
	// console.log(id_cliente);
// }
function cliente_insertar(){
	
	
	console.log("guardando cliente");
	$("#sig").prop("disabled", true);// DEshabilita el boton;
	
	$.ajax({
		url : "Consultas/clientes_insertar.php",
		method: "Post",
		dataType: "JSON", //La respuesta la interpreta como JSON
		data: $("#form_cliente").serialize()
	}).done(termina_cliente_insertar).fail(fallo).always(siempre); 
	return false;
	
}
function termina_cliente_insertar(respuesta){
	$("#id_clientes").val(respuesta.id_clientes); //asignar el valor de id_cliente al input 
	$('.nav-pills a[href="#detalles"]').tab('show');
	// $("#sig").prop("disabled", false);
	
}



function ventas_insertar(){
	$("#guardar").prop("disabled", true);// DEshabilita el boton;
	$.ajax({ 
		url : "Consultas/ventas_insertar.php",
		method: "Post",
		dataType:"JSON",
		data: $("#form_venta_detalle").serialize() + "&" +  $("#form_cliente").serialize()
	}).done(termina_ventas_insertar).fail(fallo).always(siempre); 	
	
	
	return false;
	
	}
	
	function termina_ventas_insertar(respuesta){

		
		$("#guardar").prop("disabled", false);	
		
		toastr.success("Guardado Corectamente");
		window.location.href="venta_imprimir.php?id_ventas=" + respuesta.id_ventas;
		
}



function fallo(xhr, error,ernum){
	
}
function siempre(respuesta){
	
}

function sumarImportes(event){
	$importeTotal=0; 
	var ImporteTotal=0;
	var anticipo= $(this).closest(".row ").find(".anticipo").val();
	var importeTotal = $(this).closest(".row ").find(".importeTotal").val();
	var saldo= importeTotal-anticipo;
	$(this).closest(".row ").find(".saldo").val(saldo);
	console.log("saldo: ", saldo);
	
	$(".importe").each(calcularImporte);  
	
	function calcularImporte(index, element){
		var precio= $(this).closest(".row ").find(".precio").val();
		var cantidad= $(this).closest(".row ").find(".cantidad").val();
		var importe= precio*cantidad;
		
		$(this).val(importe);
		$importeTotal += importe; 
		console.log("importe:", importe);	
		$("#importeTotal").val($importeTotal);
		
	}
	
	
}