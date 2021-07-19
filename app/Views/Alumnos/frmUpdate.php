<?php
    $id = $alumno[0]['idAlumno'];
    $nombres = $alumno[0]['nombreAlumno'];
    $apellidos = $alumno[0]['apellidoAlumno'];
    $edad = $alumno[0]['edad'];
?>
<div class="container">
    <h1 class="justify-content-center pt-4 pb-4">Actualiza el nombre del Alumno.</h1>
    <?php //print_r($alumno); ?>
</div>
<div class="container">
    <form action="<?= base_url().'/Update'; ?>" method="POST" autocomplete="off">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="form-group">
                    <input type="text" class="form-control" name="idAlumno" id="idAlumno" aria-describedby="helpId" hidden="" value="<?= $id; ?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="nombre">Nombres:</label>
                    <input type="text" name="nombreAlumno" id="nombre" class="form-control" placeholder="Ingresa tus nombres" aria-describedby="helpId" value="<?= $nombres;?>">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="apellido">Apellidos:</label>
                    <input type="text" name="apellidoAlumno" id="apellido" class="form-control" placeholder="Ingresa tus apellidos" aria-describedby="helpId" value="<?= $apellidos;?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="number" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="Ingresa tu edad" value="<?= $edad;?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-md-2">
                <button type="submit" class="btn btn-warning btn-block">Actualizar</button>
            </div>
        </div>
    </form>
</div>