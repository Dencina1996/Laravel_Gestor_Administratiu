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
		<br><br><br>
		<div class="tablaClientes">
			<table>
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
			<div id="detallesUsuario" style="visibility: hidden;">
				<form action = "/detallesCliente" method = "post">
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
					<input type="submit" name="submit" value="Guardar">
				</form>
				<div class="tablaClientes">
					<table>
					<td><b>ID Archivo</b></td>
					<td><b>ID Cliente</b></td>
					<td><b>ID Venta</b></td>
					<td><b>Nombre Archivo</b></td>
						@foreach ($archivos as $archivo)
						<tr onclick="checkRow(this)">
							<td>{{ $archivo->ID_Archivo}}</td>
							<td>{{ $archivo->ID_Cliente}}</td>
							<td>{{ $archivo->ID_Venta}}</td>
							<td>{{ $archivo->Ruta_Archivo}}</td>
						</tr>
						@endforeach
					</table>
				</div>
				<br><br><br><br>
				<form action="addFile" method="post" enctype="multipart/form-data">
					@csrf
					<input type="number" name="idCliente" style="visibility: hidden;">
		            <input type="file" name="archivo" id="archivo">
		            <input type="submit" value="Subir archivo">
	        	</form>
			</div>
			@stop
			@csrf
		</div>
	</body>
</html>