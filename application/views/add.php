<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
</head>
<body>
	<section class="container" style="margin: 10% 0% 0% 20%;">
		<?php echo form_open('add'); ?>
		<div class="row">
			<div class="col-sm-4">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombres" class="form-control">
				<span style="color: var(--red);"><?php echo form_error('nombres'); ?></span>
			</div>
			<div class="col-sm-4">
				<label for="apellido">Apellido</label>
				<input type="text" name="apellidos" class="form-control">
				<span style="color: var(--red);"><?php echo form_error('apellidos'); ?></span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="fecha_nacimiento">Fecha de Nacimiento</label>
			<input type="text" name="fecha_nacimiento" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('fecha_nacimiento'); ?></span>
		</div>
		<div class="col-sm-4">
				<label for="">Dirección</label>
			<input type="text" name="direccion" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('direccion'); ?></span>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Motivo de Consulta</label>
			<input type="text" name="motivo_consulta" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('motivo_consulta'); ?></span>
		</div>
		<div class="col-sm-4">
				<label for="">Enfermedad Actual</label>
			<input type="text" name="enfermedad_actual" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('enfermedad_actual'); ?></span>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Antecedentes Familiares</label>
			<input type="text" name="antecedentes_familiares" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('antecedentes_familiares'); ?></span>
		</div>
		<div class="col-sm-4">
				<label for="">Antecedentes Personales</label>
			<input type="text" name="antecedentes_personales" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('antecedentes_personales'); ?></span>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Inmunizaciones</label>
			<input type="text" name="inmunizaciones" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('inmunizaciones'); ?></span>
		</div>
		<div class="col-sm-4">
				<label for="">Peso (Kg)</label>
			<input type="text" me="peso" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('peso'); ?></span>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Talla (cm)</label>
			<input type="text" name="talla" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('talla'); ?></span>
		</div>
		<div class="col-sm-4">
				<label for="">Circunferencia Cefálica</label>
			<input type="text" name="cc" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('cc'); ?></span>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<label for="">Tensión Arterial</label>
			<input type="text" name="tension_arterial" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('tension_arterial'); ?></span>
		</div>
		<div class="col-sm-4">
				<label for="">Saturación de Oxígeno</label>
			<input type="text" name="saturacion_oxigeno" class="form-control">
			<span style="color: var(--red);"><?php echo form_error('saturacion_oxigeno'); ?></span>
		</div>
		</div>
		<div class="row">
			<div class="col-sm-8">
				<label for="tratamiento">Tratamiento</label>
				<input type="text" name="tratamiento" class="form-control">
				<span style="color: var(--red);"><?php echo form_error('tratamiento'); ?></span>
			</div>
		</div>
		<br>
		<div class="row" style="display: flex;justify-content: center;">
			<div class="col-sm-8" style="margin-left: 24%;">
				<button type="submit" class="btn btn-success">Guardar</button>
			</div>
		</div>
	</section>
</body>
</html>