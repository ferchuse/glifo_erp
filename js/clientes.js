$(document).ready(alcargar);

function alcargar()
{
		$("#buscar").on("keyup", function buscarCliente(event) {
		var value = $(this).val().toLowerCase();
			$(".buscar").filter(function() {
			console.log("estoy buscando, espera marito");
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		});
	
	clientes_select();
	
	
	$("#form_cliente").submit(guardarCliente);

}





function guardarCliente(){
	console.log("Guardando");
	if($("#accion").val() == "insertar"){
		// url = "Consultas/clientes_insertar.php";
		$.ajax({
			url:"Consultas/clientes_insertar.php",
			method: "Post",
			dataType: "JSON", //La respuesta la interpreta como JSON
			data: $("#form_cliente").serialize()
	}).done(termina_guardar_clientes).fail(fallo).always(siempre);
		
		
	}
	else{
		// url = "Consultas/clientes_actualizar.php";
		
		$.ajax({
			url:" Consultas/clientes_actualizar.php",
			method: "Post",
			dataType: "JSON", //La respuesta la interpreta como JSON
			data: $("#form_cliente").serialize()
		}).done(termina_actualizar_clientes).fail(fallo).always(siempre);
	}

	return false;
}

function termina_guardar_clientes(){
	toastr.success("Cliente","Nuevo");
	
	
}
function termina_actualizar_clientes(){
	toastr.success("Cliente","Actualizado");
	
	
}

function clientes_select(){
	console.log("guardando formulario");
	$.ajax({
		url : "Consultas/clientes_select.php",
		
	}).done(exito).fail(fallo).always(siempre); 
	return false;
	
}
function exito(respuesta){
	$("#tabla_clientes").html(respuesta);
	
	$(".editar").click(editar_registro_ajax);
	
	
	
	
}

function editar_registro_data(){
	console.log("editar_registro");
	$("#accion").val("actualizar");
	
	$("#Modal_cliente").modal("show");
	$("#Modal_cliente .modal-title").html("<b>Editar Cliente</b>");
	
	$.each($(this).data(), function(name, value){
		$("#" + name).val(value);
		
	});
	
	console.log("data atributos", $(this).data());
	// data= {
	// "id_clientes": 118
	// "nombre_clientes": "Juan"
	
	// }
	
}
function editar_registro_ajax(){
	console.log("editar_registro_ajax");
	$("#accion").val("actualizar");
	
	var id_clientes = $(this).data("id_clientes");
	
	$.ajax({
		url: "Consultas/clientes_json.php",
		dataType:"JSON",
		data: {"id_clientes":id_clientes}
		
		
		}).done(function (respuesta){
		
		$.each(respuesta, function(name, value){
			$("#" + name).val(value);
			
		});
	})
	
	$("#Modal_cliente").modal("show");
	$("#Modal_cliente .modal-title").html("<b>Editar Cliente</b>");
	
	
	
	console.log("data atributos", $(this).data());
	// data= {
	// "id_clientes": 118
	// "nombre_clientes": "Juan"
	
	// }
	
}
function fallo(xhr, error,ernum){
	
}
function siempre(respuesta){
	
}