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
		<form method="post">
			@csrf
			<input type="text" name="textoBuscar">
			<input type="submit" formaction="buscarNombre" name="Buscar" value="Buscar por nombre">
			<input type="submit" formaction="buscarDNI" name="Buscar" value="Buscar por CIF/NIF">
			<input type="submit" formaction="buscarLocalidad" name="Buscar" value="Buscar por Localidad">
		</form>
		<p name="textoBuscado"></p>
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
					<td></td>
				</tr>
				@foreach ($clientes as $cliente)
				<tr>
					<form action="detallesCliente" method="post">
					@csrf
					<td>{{ $cliente->ID_Cliente}}<input type="number" name="id" value="{{ $cliente->ID_Cliente}}" style="display: none"></td>
				<tr onClick="window.open('infoCliente');">
					<td name="idC">{{ $cliente->ID_Cliente}}</td>
					<td>{{ $cliente->Nombre}}</td>
					<td>{{ $cliente->Email}}</td>
					<td>{{ $cliente->Telefono}}</td>
					<td>{{ $cliente->CIF_NIF}}</td>
					<td>{{ $cliente->Direccion}}</td>
					<td>{{ $cliente->Provincia}}</td>
					<td>{{ $cliente->Localidad}}</td>
					<td>{{ $cliente->CP}}</td>
					<td><input type="submit" name="Detalles" value="Detalles"></td>
					</form>
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
					<label>Nombre</label>
					<input type="text" name="name" placeholder="Nombre" maxlength="100">
					<br><br>
					<label>E-Mail</label>
					<input type="email" name="mail" placeholder="Email" maxlength="100">
					<br><br>
					<label>Teléfono</label>
<<<<<<< HEAD
=======
					<br>
					<input type="text" name="mail" placeholder="Email" maxlength="100">
					<br>
>>>>>>> e0ff4d5bb87bb73d3b2b1ef2b9bf486fa78037bc
					<input type="text" name="phone" placeholder="Teléfono" maxlength="9">
					<br><br>
					<label>CIF/NIF/DNI</label>
					<input type="text" name="dni" placeholder="CIF/NIF" maxlength="9">
					<br><br>
					<label>Dirección</label>
					<input type="text" name="address" placeholder="Dirección" maxlength="100">
					<br><br>
					<label>Província</label>
					<input type="text" name="country" placeholder="Província" maxlength="50">
					<br><br>
					<label>Ciudad</label>
					<input type="text" name="city" placeholder="Ciudad" maxlength="50">
					<br><br>
					<label>C. Postal</label>
					<input type="text" name="cp" placeholder="Código Postal" maxlength="5">
					<br><br>
					<input type="submit" value="Registrar Cliente" style="float: none;">
					<p name="errors"></p>
				</form>
			</div>
		@stop
		@csrf
	</div>
	</body>
</html>