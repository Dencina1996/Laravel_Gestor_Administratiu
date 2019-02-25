<!DOCTYPE html>
<html>
<head>
	<title>Nou Client</title>
	<meta charset="utf-8">
</head>
<body>
	<form action = "/create" method = "post">
		@csrf
		<input type="text" name="name" placeholder="Nombre">
		<br>
		<input type="mail" name="mail" placeholder="Email">
		<br>
		<input type="number" name="phone" placeholder="Teléfono">
		<br>
		<input type="text" name="dni" placeholder="CIF/NIF">
		<br>
		<input type="text" name="address" placeholder="Dirección">
		<br>
		<input type="text" name="country" placeholder="Província">
		<br>
		<input type="text" name="city" placeholder="Ciudad">
		<br>
		<input type="number" name="cp" placeholder="Código Postal">
		<br>
		<input type="submit" value="Registrar Cliente">
</body>
</html>
 