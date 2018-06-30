<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Administración de Pacientes</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">	
	<section style="margin: 10% 0% 0% 20%;">
		<?php echo form_open('processedit'); ?>
		<div class="row">
			<div class="col-sm-4">
				<label for="nombre">Nombre</label>
				<input type="text" value="<?php echo $nombres; ?>" name="nombres" class="form-control">
			</div>
			<div class="col-sm-4">
				<label for="">Apellido</label>
				<input type="text" value="<?php echo $apellidos; ?>" name="apellidos" class="form-control">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Fecha de Nacimiento</label>
			<input type="text" value="<?php echo $fecha_nacimiento; ?>" name="fecha_nacimiento" class="form-control">
		</div>
		<div class="col-sm-4">
				<label for="">Dirección</label>
			<input type="text" value="<?php echo $direccion; ?>" name="direccion" class="form-control">
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Motivo de Consulta</label>
			<input type="text" value="<?php echo $motivo_consulta; ?>" name="motivo_consulta" class="form-control">
		</div>
		<div class="col-sm-4">
				<label for="">Enfermedad Actual</label>
			<input type="text" value="<?php echo $enfermedad_actual; ?>" name="enfermedad_actual" class="form-control">
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Antecedentes Familiares</label>
			<input type="text" value="<?php echo $antecedentes_familiares; ?>" name="antecedentes_familiares" class="form-control">
		</div>
		<div class="col-sm-4">
				<label for="">Antecedentes Personales</label>
			<input type="text" value="<?php echo $antecedentes_personales; ?>" name="antecedentes_personales" class="form-control">
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Inmunizaciones</label>
			<input type="text" value="<?php echo $inmunizaciones; ?>" name="inmunizaciones" class="form-control">
		</div>
		<div class="col-sm-4">
				<label for="">Peso (Kg)</label>
			<input type="text" value="<?php echo $peso; ?>" name="peso" class="form-control">
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Talla (cm)</label>
			<input type="text" value="<?php echo $talla; ?>" name="talla" class="form-control">
		</div>
		<div class="col-sm-4">
				<label for="">Circunferencia Cefálica</label>
			<input type="text" value="<?php echo $cc; ?>" name="cc" class="form-control">
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Tensión Arterial</label>
			<input type="text" value="<?php echo $tension_arterial; ?>" name="tension_arterial" class="form-control">
		</div>
		<div class="col-sm-4">
				<label for="">Saturación de Oxígeno</label>
			<input type="text" value="<?php echo $saturacion_oxigeno; ?>" name="saturacion_oxigeno" class="form-control">
		</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label for="tratamiento">Tratamiento</label>
				<input type="text" name="tratamiento" class="form-control" value="<?php echo $tratamiento;?>">
			</div>
		</div>
		<br>
		<div class="row" style="display: flex;justify-content: center;">
			<div class="col-sm-8" style="margin-left: 24%;">
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</section>
	</div>
</body>
</html>