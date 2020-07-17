<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../css/master.css">
		<title>configuración</title>
	</head>

	<body>
		<div class="container">
			<img src="../img/user.png" class="avatar" alt="Avatar Image">
			<div class="h1"> Configuración de cuenta </div>
				<form action="../controllers/rejistroPadre.php" method="POST">
					<table>
						<tr>
							<td>
								<label class="label"for="Nombre">Nombre</label>
							</td>
							<td>
								<input class="input"type="text" name="Nombre" placeholder="Inserte su nombre">
							</td>
						</tr>
						<tr>
							<td>
								<label class="label"for="Ap_paterno">Apellido paterno</label>
							</td>
							<td>
								<input class="input"type="text" name="Ap_paterno" placeholder="Inserte su apellido paterno">
							</td>
						</tr>
						<tr>
							<td>
								<label class="label"for="Ap_materno">Apellido materno</label>
							</td>
							<td>
								<input class="input"type="text" name="Ap_materno" placeholder="Inserte su apellido Inserte su apellido paterno">
							</td>
						</tr>
						<tr>
							<td>
								<label class="label"for="Email">E-mail</label>
							</td>
							<td>
								<input class="input"type="text" name="Email" placeholder="Inserte su E-mail">
							</td>
						</tr>
						<tr>
							<td>
								<label class="label"for="Email">Fecha nacimineto</label>
							</td>
							<td>
								<input class="input"type="date" name="Fecha_nacimineto" placeholder="Inserte su fecha nacimineto">
							</td>
						</tr>
						<tr>
							<td>
								<label class="label"for="Password">Contraseña</label>
							</td>
							<td>
								<input class="input"type="text" name="Password" placeholder="Inserte su Contraseña">
							</td>
						</tr>
						<tr >
							<td colspan="2" scope="rowgroup" class="center" >
								<button  class="button-primary" name ="Guardar" type="submit">Guardar</button>
							</td>
						</tr>
					</table>
					<a class="a2" href="login.php"> << volver</a>
				</form>
			</div>
		</body>
</html>