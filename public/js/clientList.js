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
	$("div[id='detallesUsuario']").attr("style","visibility: visible");	
	var array = [];
	$(element).children('td').each(function(index, el) {
		array.push(el.innerText);
	});
	$("input[name='idCliente']").val(array[0]);
    $("input[name='user_name']").val(array[1]);
    $("input[name='user_mail']").val(array[2]);
    $("input[name='user_phone']").val(array[3]);
    $("input[name='user_dni']").val(array[4]);
    $("input[name='user_address']").val(array[5]);
    $("input[name='user_country']").val(array[6]);
    $("input[name='user_city']").val(array[7]);
    $("input[name='user_cp']").val(array[8]);
}

function checkForm(){
    $("input").css('border', 'solid 2px black');
    $("p[name='errors']").text("");
    var count=8;
    name= $("input[name='name']").val();
    if (name == "") {
        $("input[name='name']").css('border', 'solid 2px red');
        $("p[name='errors']").append("Introduce un nombre<br>");
    }else {
        count=count-1;
    }
    mail= $("input[name='mail']").val();
    if (mail == "") {
        $("input[name='mail']").css('border', 'solid 2px red');
        $("p[name='errors']").append("Introduce un mail<br>");
    }else {
        count=count-1;
    }
    phone= $("input[name='phone']").val();
    if (phone == "") {
        $("input[name='phone']").css('border', 'solid 2px red');
        $("p[name='errors']").append("Introduce un número de teléfono<br>");
    }else {
        count=count-1;
    }
    dni= $("input[name='dni']").val();
    if (dni == "") {
        $("input[name='dni']").css('border', 'solid 2px red');
        $("p[name='errors']").append("Introduce un DNI válido<br>");
    }else {
        count=count-1;
    }
    address= $("input[name='address']").val();
    if (address == "") {
        $("input[name='address']").css('border', 'solid 2px red');
        $("p[name='errors']").append("Introduce una dirección válida<br>");
    }else {
        count=count-1;
    }
    country= $("input[name='country']").val();
    if (country == "") {
        $("input[name='country']").css('border', 'solid 2px red');
        $("p[name='errors']").append("Introduce una provincia válida<br>");
    }else {
        count=count-1;
    }
    city= $("input[name='city']").val();
    if (city == "") {
        $("input[name='city']").css('border', 'solid 2px red');
        $("p[name='errors']").append("Introduce una ciudad válida<br>");
    }else {
        count=count-1;
    }
    cp= $("input[name='cp']").val();
    if (cp == "") {
        $("input[name='cp']").css('border', 'solid 2px red');
        $("p[name='errors']").append("Introduce un código postal válido<br>");
    }else {
        count=count-1;
    }
    if (count!=0) {
        return false;
    }else {
        return true;
    }
}