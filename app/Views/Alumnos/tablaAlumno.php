<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="">
            <table class="table table-striped table-responsive">
                <thead class="thead-inverse">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>EDAD</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alumno as $key) : ?>
                        <tr>
                            <td scope="row"><?= $key->idAlumno; ?></td>
                            <td><?= $key->nombreAlumno; ?></td>
                            <td><?= $key->apellidoAlumno; ?></td>
                            <td><?= $key->edad; ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="<?= base_url() .'/Actualizar/'.$key->idAlumno ?>"><i class="far fa-edit"></i>
                                </a>
                                <a class="btn btn-danger btn-sm" href="<?= base_url() .'/Delete/'.$key->idAlumno ?>"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php //print_r($alumno) ;
?>

<!-- EL FOOTER SE ENCUENTRA ACA YA QUE EL SCRIPT PARA LA CONDICION DE SWEET ALERT
    AFECTA A EL FRMACTULIZAR ALUMNO -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
    // $condicion viene de Crud.php
    let mensaje = '<?= $condicion; ?>';
    if (mensaje == 1) {

    } else if (mensaje == 2) {
        swal.fire({
            icon: 'success',
            title: 'Guardado!',
            text: 'El alumno se registro exitosamente.'
        });
    } else if (mensaje == 3) {
        swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: 'Ocurrio un error al registrar al alumno.'
        });
    } else if (mensaje == 4) {
        swal.fire({
            icon: 'success',
            title: 'Actualizado!',
            text: 'Los datos del alumno se actualizaron correctamente.'
        });
    } else if (mensaje == 5) {
        swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: 'Ocurrio un error al actulizar datos del alumno.'
        });
    }  else if (mensaje == 6) {
        swal.fire({
            icon: 'success',
            title: 'Eliminado!',
            text: 'Se eliminaron los datos del alumno correctamente.'
        });
    }else if (mensaje == 7) {
        swal.fire({
            icon: 'error',
            title: 'Ups...',
            text: 'Ocurrio un error al eliminar los datos del alumno.'
        });
    }
</script>
</body>

</html>