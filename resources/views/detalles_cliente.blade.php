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
<<<<<<< HEAD
=======
		<ul class="breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="/listaClientes">Listado de Clientes</a></li>
			<li><a href="javascript:window.location.reload(true)">Detalles de Cliente</a></li>
		</ul>
>>>>>>> e0ff4d5bb87bb73d3b2b1ef2b9bf486fa78037bc
		<a id="nuevoUsuario" class="buttonLinks" onclick="mostrarPanelUsuario()">Añadir Venta</a>
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
					<td></td>
				</tr>
				@foreach ($clientes as $cliente)
				<tr>
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
					<td><input type="button" name="Editar" value="Editar Cliente" onclick="checkRow(this)"></td>
				</tr>
				@endforeach
			</table>
			<div id="detallesUsuario" style="display: none;">
				</tr>
				@endforeach
			</table>
			<div id="detallesUsuario" style="visibility: hidden;">
				<form action = "/detallesCliente" method = "post">
					<br>
					<div style="float: left; width: 50%; text-align: left;">
						<label>Nombre: </label>
							<input type="text" name="user_name" placeholder="Nombre" maxlength="100" value="{{ $cliente->Nombre}}">
							<br>
						<label>E-Mail: </label>
							<input type="email" name="user_mail" placeholder="Email" maxlength="100" value="{{ $cliente->Email}}">
							<br>
						<label>Teléfono: </label>
							<input type="text" name="user_phone" placeholder="Teléfono" maxlength="9" value="{{ $cliente->Telefono}}">
							<br>
						<label>CIF/NIF/DNI: </label>
							<input type="text" name="user_dni" placeholder="CIF/NIF" maxlength="9" 
							value="{{ $cliente->CIF_NIF}}">
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
							<input type="text" name="user_address" placeholder="Dirección" maxlength="100" value="{{ $cliente->Direccion}}">
							<br>		
						<label>Província: </label>
							<input type="text" name="user_country" placeholder="Província" maxlength="50" value="{{ $cliente->Provincia}}">
							<br>		
						<label>Localidad: </label>
							<input type="text" name="user_city" placeholder="Código Postal" maxlength="5" value="{{ $cliente->Localidad}}">
							<br>		
						<label>Código Postal: </label>
							<input type="text" name="user_cp" placeholder="Código Postal" maxlength="5" value="{{ $cliente->CP}}">
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
			</div>
			<table style="margin-top: 20px;">
				<tr>
					<td>ID Venta</td>
					<td>Descripcion</td>
					<td>Estado</td>
					<td>ID Cliente</td>
					<td></td>
				</tr>
				@foreach ($ventas as $venta)
				<tr>
					<form action="detallesVenta" method="post">
						@csrf
						<td>{{ $venta->ID_Venta}}<input type="number" name="idVenta" value="{{ $venta->ID_Venta}}" style="display: none"></td>
						<td>{{ $venta->Descripcion}}</td>
						<td>{{ $venta->Estado}}</td>
						<td>{{ $venta->ID_Cliente}}</td>
						<td><input type="submit" name="detalleVentas" value="Detalles"></td>
					</form>
				</tr>
				@endforeach
			</table>
			<div class="formularioCliente" style="display: none;">
				<form action = "insertVenta" method = "post" onsubmit="return checkEmptyFields()">
					@csrf
					<label for="descripcion">Descripción</label><br>
					<input type="text" name="descripcion" placeholder="Descripción" maxlength="100">
					<br>
					<input type="text" name="estado" placeholder="Estado" maxlength="9" value="Activa" style="display: none;">
					<br>
					<input type="text" name="id_Cliente" placeholder="ID Cliente" maxlength="9" value="{{ $cliente->ID_Cliente}}" style="display: none;">
					<br>
					<input type="submit" value="Añadir Venta">
					<p name="errors"></p>
				</form>
			</div>
<<<<<<< HEAD
=======
		</div>
		@stop
		@csrf
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
>>>>>>> e0ff4d5bb87bb73d3b2b1ef2b9bf486fa78037bc
		</div>
		@stop
		@csrf
	</body>
</html>