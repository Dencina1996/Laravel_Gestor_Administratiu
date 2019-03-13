@extends('home')
<html>
	<head>
		<title>Listado de Clientes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/listaClientes.css') }}">
		<link rel="shortcut icon" href="{{ asset('svg/favicon.png') }}">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="{{ asset('js/clientList.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/min.js') }}"></script>
	</head>
	<body>
		@section('content')
		<a id="nuevoUsuario" class="buttonLinks" onclick="mostrarPanelUsuario()">Añadir Cliente</a>
		<br><br><br>
		<div class="tablaClientes">
			<table>
				<tr>
					<td><b>ID</b></td>
					<td><b>Nombre</b></td>
					<td><b>Email</b></td>
					<td><b>Teléfono</b></td>
					<td><b>CIF/NIF</b></td>
					<td><b>Dirección</b></td>
					<td><b>Província</b></td>
					<td><b>Localidad</b></td>
					<td><b>Código Postal</b></td>
				</tr>
				@foreach ($clientes as $cliente)
				<tr onclick="checkRow(this)">
					<td>{{ $cliente->ID_Cliente}}</td>
					<td>{{ $cliente->Nombre}}</td>
					<td>{{ $cliente->Email}}</td>
					<td>{{ $cliente->Telefono}}</td>
					<td>{{ $cliente->CIF_NIF}}</td>
					<td>{{ $cliente->Direccion}}</td>
					<td>{{ $cliente->Provincia}}</td>
					<td>{{ $cliente->Localidad}}</td>
					<td>{{ $cliente->CP}}</td>
				</tr>
				@endforeach
			</table>
			<!-- 
			<div id="detallesUsuario" style="visibility: hidden;">
				<form action = "/create" method = "post">
					<br>
					<div style="float: left; width: 50%; text-align: left;">
						<label>Nombre: </label>
							<input type="text" name="user_name" placeholder="Nombre" maxlength="100">
							<br>
						<label>E-Mail: </label>
							<input type="email" name="user_mail" placeholder="Email" maxlength="100">
							<br>
						<label>Teléfono: </label>
							<input type="text" name="user_phone" placeholder="Teléfono" maxlength="9">
							<br>
						<label>CIF/NIF/DNI: </label>
							<input type="text" name="user_dni" placeholder="CIF/NIF" maxlength="9">
							<br>		
					</div>
					<div style="float: right; width: 50%; text-align: right;">
						<label>Dirección: </label>
							<input type="text" name="user_address" placeholder="Dirección" maxlength="100">
							<br>		
						<label>Província: </label>
							<input type="text" name="user_country" placeholder="Província" maxlength="50">
							<br>		
						<label>Localidad: </label>
							<input type="text" name="user_city" placeholder="Código Postal" maxlength="5">
							<br>		
						<label>Código Postal: </label>
							<input type="text" name="user_cp" placeholder="Código Postal" maxlength="5">
							<br>
					</div>
				</form>
			</div>
			-->
			<div class="formularioCliente" style="visibility: hidden;">
				<form action = "/create" method = "post" onsubmit="return checkEmptyFields()">
					@csrf
					<input type="text" name="name" placeholder="Nombre" maxlength="100">
					<br>
					<input type="text" name="mail" placeholder="Email" maxlength="100">
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
					<p name="errors"></p>
				</form>
			</div>
		@stop
		@csrf
	</div>
	</body>
</html>