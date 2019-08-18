
$(document).ready(alcargar);

function alcargar(){
	
	$("#buscar").on("keyup", function buscarProducto(event) {
		var value = $(this).val().toLowerCase();
		$(".buscar").filter(function() {
			$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	});
	
	
	$("#btn_agregar_concepto").click(agregarConcepto);
	$("#anticipo").keyup(calculaSaldo);
	$("#form_cliente").submit(cliente_insertar);
	$("#form_venta_detalle").submit(ventas_insertar);
	
	$(".cantidad, .precio").keyup(sumarImportes);
	$("#form_venta_detalle .cantidad").keyup(calcularExistencia);
	$("#acredito").change(activarCredito);
	$("#pago_acordado").keyup(calculaPagos);
	$(".eliminar_venta").click(eliminarVenta);
	
}

function agregarConcepto(){
	
	$(".fila_concepto").last().clone(true).appendTo("#div_conceptos");
	
} 
function eliminarVenta(){ 
	
	var id_ventas= $(".id_ventas").val();
	$.ajax({
		url:"Consultas/ventas_borrar.php",
		dataType :"JSON",
		method: "GET",
		data: {"id_ventas": id_ventas}
		
	}).done(termina_eliminar_venta).fail(fallo).always(siempre);
	console.log("eliminado bien");
	
	return false;	 
}


function activarCredito(){
	
	
	$("#campos_credito").toggle($(this).prop("checked" ));
	
	
	
}
function calculaPagos(){
	var cantidad_pagos=$("#cantidad_pagos").val();
	var pago_acordado=$("#pago_acordado").val();
	
	console.log("pago_acordado",pago_acordado);
	var saldo=$("#saldo_ventas").val();
	cantidad_pagos = saldo /pago_acordado;
	pago_acordado=saldo/cantidad_pagos;
	$("#cantidad_pagos").val(cantidad_pagos);
	$("#pago_acordado").val(pago_acordado);
	
	
}
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
	toastr.success('Listo','Datos Guardados');
	$("#sig").prop("disabled", false);
	
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
function termina_eliminar_venta(respuesta){
	
	toastr.success("Borrado Corectamente");
	location.reload(true);  
	 
}



function fallo(xhr, error,ernum){
	//toastr.success("error");
}
function siempre(respuesta){
	
}

function sumarImportes(event){
	var $importe_total=0;  
	var $gananciaTotal=0;  
	
	$(".precio").each(	function calcularImporte(index, element){
		if($(this).val() != ''){
			var precio= Number($(this).val());
			var cantidad= Number($(this).closest(".form-row").find(".cantidad").val());
			var ganancia= Number($(this).closest(".form-row").find(".pesos_ganancia").val());
			var importe= precio * cantidad; 
			
			$importe_total += importe; 
			$gananciaTotal += ganancia; 
			 
			$(this).closest(".form-row").find(".importe").val(importe);
			$("#pesos_ganancia_ventas").val($gananciaTotal);
			
		}
		
	});  
	
	
	$("#anticipo").val($importe_total);
	
	$("#importe_total").val($importe_total);
	
	calculaSaldo();
	
}
function calculaGanancia(){
	
	var pesos_ganancia= $(this).closest(".row ").find(".pesos_ganancia").val();
	if (pesos_ganancia==0){
		pesos_ganancia=precio;   
		$(this).closest(".row ").find(".pesos_ganancia").val(pesos_ganancia);
	}
	else if(precio==0){
		$(this).closest(".row ").find(".pesos_ganancia").val(importe);
	}
	var ganancia_venta=pesos_ganancia*cantidad;
	
	$gananciaTotal+= ganancia_venta; 
	$("#pesos_ganancia_ventas").val($gananciaTotal);
	
	
}
function calculaSaldo(){
	
	var anticipo = Number($("#anticipo").val());
	var importe_total = Number($("#importe_total").val());
	
	$("#saldo").val(importe_total - anticipo);
}


function calcularExistencia(){
	console.log("esta calculando");
	
	$(".existencia_actual").each(calcularActual);  
	
	function calcularActual(index, element){
		var existencia_anterior= $(this).closest(".row ").find(".existencia_anterior").val();
		var cantidad_venta= $(this).closest(".row ").find(".cantidad").val();
		var precio= $(this).closest(".row ").find(".precio").val();
		var cantidadActual= existencia_anterior-cantidad_venta;
		
		$(this).val(cantidadActual);
		console.log("index:", index);	
		console.log("cantidad actual:", cantidadActual);	
		
		
		
		if (existencia_anterior >=1){
			if(cantidadActual==0){
				
				toastr.warning("ya no hay productos,en inventario");
			}
			}else{
			
		}
	}
}

