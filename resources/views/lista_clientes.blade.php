<html>
	<head>
		<title>View Student Records</title>
		<meta charset="utf-8">
	</head>
	<body>
		<table border = "1">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Email</td>
				<td>Teléfono</td>
				<td>CIF/NIF</td>
				<td>Dirección</td>
				<td>Província</td>
				<td>Localidad</td>
				<td>Código Postal</td>
			</tr>
			@foreach ($clientes as $cliente)
			<tr>
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
	</body>
</html>