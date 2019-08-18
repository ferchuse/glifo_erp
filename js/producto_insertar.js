
$(document).ready(alcargar);

function alcargar(){
	$("#buscar").on("keyup", function buscarProducto(event) {
		var value = $(this).val().toLowerCase();
			$(".buscar").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	 
	//$("#productos").submit(producto_insertar);
	$("#productos").submit(guardarProducto);
		
	console.log ("listo");
	$("#porc_ganancia").keyup(calculaPrecio);
	$("#precio_venta").keyup(calculaGanancia);
	$("#pesos_ganancia").keyup(calculaPorc);  
	$(".buscar").click(editar_registro_ajax);
	$("#cerrar").click(refresh);
	
	
}




function calculaPrecio(){

	var costo_compra=$("#costo_compra").val();
	var porc_ganancia=$("#porc_ganancia").val();
	var pesos_ganancia=$("#pesos_ganancia").val();
	var precio_venta=$("#precio_venta").val();
	
	var ganancia=(costo_compra*porc_ganancia)/100; //G= CP & %Guardados
	
	var precio_venta1= parseInt(costo_compra)+parseInt(ganancia); // parseInt para sumar string 
	
	
	console.log("ganancia",ganancia);
	console.log("precio_venta",precio_venta1);
	var venta_precio=Math.round(precio_venta1);
	var ganan=Math.round(ganancia);
	$("#precio_venta").val(venta_precio);
	$("#pesos_ganancia").val(ganan);
	

}

function calculaGanancia(){
	
	var costo_compra=$("#costo_compra").val();
	var pesos_ganancia=$("#pesos_ganancia").val();
	var precio_venta=$("#precio_venta").val();
	
	var O_pesos_ganancia= precio_venta-costo_compra;
	var porcentaje=(O_pesos_ganancia/ costo_compra)*100;
		var pesos=Math.round(O_pesos_ganancia);
		
var porcen=Math.round(porcentaje);
	$("#pesos_ganancia").val(pesos);
	$("#porc_ganancia").val(porcen);

	console.log("ganancia pesos", O_pesos_ganancia);	
}
function calculaPorc(){
	var costo_compra=$("#costo_compra").val();
	//var precio_venta=$("#precio_venta").val();
	var pesos_ganancia=$("#pesos_ganancia").val();
	
	var precio_venta=parseInt(costo_compra)+parseInt(pesos_ganancia);
	var porc_ganancia= (pesos_ganancia/costo_compra)*100;
		var precio_ven=Math.round(precio_venta);
		var porc_ganan=Math.round(porc_ganancia);
		$("#precio_venta").val(precio_ven);
$("#porc_ganancia").val(porc_ganan);

	
	
}
function producto_insertar(){
	console.log("listo para guardar");
	$("#guardar").prop("disabled", true);// DEshabilita el boton;
	
	$.ajax({
		url : "Consultas/productos_insert.php",
		method: "Post",
		dataType: "JSON", //La respuesta la interpreta como JSON
		data: $("#productos").serialize()
	}).done(termina_productos_insertar).fail(fallo).always(siempre); 
	return false;
	
}
function termina_productos_insertar(respuesta){
	toastr.success('Listo','Datos Guardados');
	console.log("productos_guardados");
	$("#guardar").prop("disabled", false);
	
	// $("#modal").modal("hide");
	
}
	
function editar_registro_ajax(){
	console.log("editar_registro_ajax");
	$("#accion").val("actualizar");
	
	var id_producto = $(this).data("id_producto");
	
	$.ajax({
		url: "Consultas/productos_json.php",
		dataType:"JSON",
		data: {"id_producto": id_producto}
		
		
		}).done(function (respuesta){
		
		$.each(respuesta, function(name, value){
			$("#" + name).val(value);
			
		});
	})
	
	$("#Modal_producto").modal("show");
	$("#Modal_producto .modal-title").html("<b>Editar Producto</b>");
	
	
	
	console.log("data atributos", $(this).data());
	
	
}
function guardarProducto(){
	console.log("Guardando");
	if($("#accion").val() == "insertar"){
		$.ajax({
			url:"Consultas/productos_insert.php",
			method: "Post",
			dataType: "JSON", //La respuesta la interpreta como JSON
			data: $("#productos").serialize()
	}).done(termina_guardar_producto).fail(fallo).always(siempre);
		
		 //location.reload(true);
	}
	else{

		
		$.ajax({
			url:" Consultas/productos_actualizar.php",
			method: "Post",
			dataType: "JSON", //La respuesta la interpreta como JSON
			data: $("#productos").serialize()
		}).done(termina_actualizar_producto).fail(fallo).always(siempre);
	}
 //location.reload(true);
	return false;
}

function termina_guardar_producto(){
	toastr.success("Producto","Nuevo");
	 location.reload(true);
	
	
}
function termina_actualizar_producto(){
	toastr.success("Producto","Actualizado");
	 location.reload(true);
	
}
function refresh(){
	location.reload(true);
	
}


function fallo(xhr, error,ernum){
	
}
function siempre(respuesta){
	
}
function exito(respuesta){
	
	
	
}

$("#buscar_producto").on("keyup", function buscarProducto(event) {
			var value = $(this).val().toLowerCase();
			$("#buscar_producto row").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});


