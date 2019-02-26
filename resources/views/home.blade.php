<!DOCTYPE html>
<html>
<head>
	<title>File Manager - AWS2</title>
	<link rel="stylesheet" href="{{ asset('/css/home.css') }}"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="icon" type="image/png" href="svg/favicon.png">
</head>
<body>
	@section('Header')
		<div class="Header">
			<h1>DK Manager</h1>
		</div>
		<div class="HeaderDirectories">
			<a href="/" style="margin: 0 auto;">Home</a>
			<a href="/listaClientes">Listado de Clientes</a>
			<a href="/añadirCliente">Añadir Cliente</a>
		</div>
		<br><br>
	@show

	<div class="Content">
		@yield('content')
	</div>
</body>
</html>