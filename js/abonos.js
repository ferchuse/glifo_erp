
$(document).ready(alcargar);

function alcargar()
{
	
	
	$("#abonos_pago").submit(abono_insertar);
	$("#abonos_cargo").submit(abono_cargo);
	$("#cantidad_abono").keyup(abonar); 
	$("#cantidad_cargo").keyup(sumarcargo);
	
	console.log ("listo");
 
}

function abono_insertar(){

	
	$("#guardar").prop("disabled", true);// DEshabilita el boton;
	
	$.ajax({
		url : "Consultas/abono_insertar.php",
		method: "Post",
		dataType: "JSON", //La respuesta la interpreta como JSON
		data: $("#abonos_pago").serialize()
	}).done(termina_abonos_insertar).fail(fallo).always(siempre); 
	console.log("guardado abono");
	return false;
	
	
}
function abono_cargo(){

	
	$("#guardar").prop("disabled", true);// DEshabilita el boton;
	
	$.ajax({
		url : "Consultas/abonos_cargo.php",
		method: "Post",
		dataType: "JSON", //La respuesta la interpreta como JSON
		data: $("#abonos_cargo").serialize()
	}).done(termina_abonos_insertar).fail(fallo).always(siempre); 
	console.log("guardado cargo");
	return false;
	
	
}
function termina_abonos_insertar(respuesta){
	console.log("respuesta: ",respuesta);
	toastr.success('Datos Guardados','Listo',);
	$("#guardar").prop("disabled", false);
	console.log("finalizo");
	//window.location.href="abonos_por_cliente.php?id_ventas=" + respuesta.id_ventas;
	window.history.back();
	
}
function fallo(xhr, error,ernum){
	
}
function siempre(respuesta){
	
}

function abonar(){
	var valance_actual=$("#saldo_ventas").val();
	var monto=$("#cantidad_abono").val();
	var total=valance_actual-monto; 
	console.log("saldo", valance_actual);
	console.log("monto", cantidad_abono);
	console.log("total", total);
	$("#importe_total_ventas").val(total); 
	
	
}
function sumarcargo(){
	var valance_actual=$("#saldo_ventas").val();
	var monto=$("#cantidad_cargo").val();
	var total=parseFloat(valance_actual)+parseFloat(monto); 
	console.log("importe_actual", total);
	console.log("valance_actual", valance_actual);
	console.log("monto", monto);
	$("#importe_total_ventas").val(total);
	
	
}



