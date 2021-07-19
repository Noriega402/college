<div class="container">
    <h1 class="justify-content-center pt-4 pb-4">Listado de alumnos del Colegio Internacional Americano.</h1>
</div>
<div class="container">
    <form action="<?= base_url() . '/Create'; ?>" method="POST" autocomplete="off">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="form-group">
                    <label for="nombre">Nombres:</label>
                    <input type="text" name="nombreAlumno" id="nombre" class="form-control" placeholder="Ingresa tus nombres" aria-describedby="helpId">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="apellido">Apellidos:</label>
                    <input type="text" name="apellidoAlumno" id="apellido" class="form-control" placeholder="Ingresa tus apellidos" aria-describedby="helpId">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="edad">Edad:</label>
                    <input type="number" class="form-control" name="edad" id="edad" aria-describedby="helpId" placeholder="Ingresa tu edad">
                </div>
            </div>
        </div>
        <div class="row">
            <div class=" col-md-2">
                <button type="submit" class="btn btn-primary btn-block">Guardar</button>
            </div>
        </div>
    </form>
</div>