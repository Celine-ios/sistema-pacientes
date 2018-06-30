<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Administración de Pacientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<header class="container" style="margin-top: 10%;">
			<h2 class="text-center">Sistema de Administración de Pacientes</h2>
		</header>
		<article class="container" style="display: flex;justify-content: center;margin-top: 10%;">
			<?php echo form_open('form'); ?>
			<div class="row">
				<div class="col-sm-14">
					<label for="user">Usuario</label>
					<input type="text" name="name" class="form-control" placeholder="Introducir un usuario">
					<br>
					<span style="color: var(--red);"><?php echo form_error('name');?></span>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-14">
					<label for="password">Contraseña</label>
					<input type="password" name="password" class="form-control" placeholder="Introducir una contraseña">
					<br>
					<span style="color: var(--red);"><?php echo form_error('name');?></span>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-sm-14">
					<button class="btn btn-success">Iniciar Sesión</button>
				</div>
			</div>
			<br>
			<h4 style="color: var(--red);">Acceso Incorrecto</h4>
		</article>
	</div>
</body>
</html>