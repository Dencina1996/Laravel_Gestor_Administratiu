/*

function nuevoCliente() {
	var divformularioCliente = $("<div>").attr('class', 'formularioCliente');
	var formularioCliente = $("<form>").attr({	action: '/create',
												method: 'post'});
	formularioCliente.append('<h3>Añadir Cliente</h3>')
	
	.append($('<input>',{	type: 'text',
							name: 'name',
							placeholder: 'Nombre',
							maxlength: '100',
							autocomplete: 'off'}))
	.append('<br>').append($('<input>',{	type: 'email',
											name: 'mail',
											placeholder: 'E-Mail',
											maxlength: '100',
											autocomplete: 'off'}))
	.append('<br>').append($('<input>',{	type: 'text',
											name: 'phone',
											placeholder: 'Teléfono',
											maxlength: '9',
											autocomplete: 'off'}))
	.append('<br>').append($('<input>',{	type: 'text',
											name: 'dni',
											placeholder: 'CIF/NIF',
											maxlength: '9',
											autocomplete: 'off'}))
	.append('<br>').append($('<input>',{	type: 'text',
											name: 'address',
											placeholder: 'Dirección',
											maxlength: '100',
											autocomplete: 'off'}))
	.append('<br>').append($('<input>',{	type: 'text',
											name: 'country',
											placeholder: 'Província',
											maxlength: '50',
											autocomplete: 'off'}))
	.append('<br>').append($('<input>',{	type: 'text',
											name: 'city',
											placeholder: 'Ciudad',
											maxlength: '50',
											autocomplete: 'off'}))
	.append('<br>').append($('<input>',{	type: 'text',
											name: 'cp',
											placeholder: 'Código Postal',
											maxlength: '5',
											autocomplete: 'off'}))
	.append('<br>').append($('<input>',{	type: 'submit',
											value: 'Registrar Cliente'}));
	divformularioCliente.append(formularioCliente);
	$("table").after(divformularioCliente);
}

/*
 	<div class="formularioCliente">
		<form action = "/create" method = "post">
			@csrf
			<input type="text" name="name" placeholder="Nombre" maxlength="100">
			<br>
			<input type="email" name="mail" placeholder="Email" maxlength="100">
			<br>
			<input type="text" name="phone" placeholder="Teléfono" maxlength="9">
			<br>
			<input type="text" name="dni" placeholder="CIF/NIF" maxlength="9">
			<br>
			<input type="text" name="address" placeholder="Dirección" maxlength="100">
			<br>
			<input type="text" name="country" placeholder="Província" maxlength="50">
			<br>
			<input type="text" name="city" placeholder="Ciudad" maxlength="50">
			<br>
			<input type="text" name="cp" placeholder="Código Postal" maxlength="5">
			<br>
			<input type="submit" value="Registrar Cliente">
		</form>
*/

function mostrarPanelUsuario() {
	$("a[id='ocultarPanel']").remove();
	$("div[class='formularioCliente']").attr("style","visibility: visible");			
	var botonInsertar = $("a[onclick='mostrarPanelUsuario()']");
	botonInsertar.before($('<a>', {	id: 'ocultarPanel',
									class: 'buttonLinks',
									style: 'float: right; margin-right: 10px; cursor: pointer;',
									onclick: 'esconderPanelUsuario()',
									text: 'Ocultar Panel'}));
}

function esconderPanelUsuario() {
	$("a[id='ocultarPanel']").remove();
	$("div[class='formularioCliente']").attr("style","visibility: hidden");				
}	

function checkRow(element) {
	alert($(element).html());
}