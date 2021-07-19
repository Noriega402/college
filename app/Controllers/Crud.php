<?php namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function alumnos(){
		// llamado de Modelo CrudModel
		$crud = new CrudModel();
		$array = $crud->listarAlumnos(); //trae la consulta del modelo.
		$mensaje = session('condicion');//para ver si la insercion se realizo correctamente
		$alumnos = ['alumno' => $array,
					'condicion' => $mensaje
				];

		$data = ['titulo' => 'C.I.A'];
		$vistas = view('Alumnos/header',$data).
		view('Alumnos/frmAlumno').
		view('Alumnos/tablaAlumno', $alumnos);

		return $vistas;
	}

	public function actualizarAlumno($idAlumno){
		$title = ['titulo' => 'Actualizar Datos de Alumno'];
		$data = ['idAlumno' => $idAlumno];//$idAlumno viene desde Routes.php, es un parametro que se recibe.
		$array = new CrudModel();
		// envia los datos a CrudModel
		$respuesta = $array->obtenerDatos($data);
		$resultado = ['alumno' => $respuesta];

		$vistas = view('Alumnos/header', $title).
		view('Alumnos/frmUpdate', $resultado).
		view('Alumnos/footer');
		return $vistas;
	}

	public function create(){
		// print_r($_POST);
		$datos = [
			'nombreAlumno' => $_POST['nombreAlumno'],
			'apellidoAlumno' => $_POST['apellidoAlumno'],
			'edad' => $_POST['edad']
		];

		$array = new CrudModel();
		$respuesta = $array->insertar($datos);
		if($respuesta > 0){
			// redirecciona a la pagina principal del proyecto
			return redirect()->to(base_url().'/Inicio')->with('condicion','2');
		}else{
			return redirect()->to(base_url().'/Inicio')->with('condicion','3');
		}
	}

	public function update(){
		$data = [
			'idAlumno' => $_POST['idAlumno'],
			'nombreAlumno' => $_POST['nombreAlumno'],
			'apellidoAlumno' => $_POST['apellidoAlumno'],
			'edad' => $_POST['edad']
		];

		$idAlumno = $_POST['idAlumno'];
		$array = new CrudModel();

		$respuesta = $array->actualizar($data,$idAlumno);

		if($respuesta){
			// redirecciona a la pagina principal del proyecto
			return redirect()->to(base_url().'/Inicio')->with('condicion','4');
		}else{
			return redirect()->to(base_url().'/Inicio')->with('condicion','5');
		}
	}

	/* NO RECUERDO PARA QUE SIRVE ESTA, ELIMINO EL CODIGO Y FUNCIONA IGUAL,
	VERIFICAR SI ESTA DE MAS.
	public function getAlumno($idAlumno){
		// obtiene el ID y lo envia a CrudModel
		$data = ['idAlumno' => $idAlumno];
		$array = new CrudModel();
		// envia los datos a CrudModel
		$respuesta = $array->obtenerDatos($data);

		$resultado = ['alumno' => $respuesta];
		$title = ['titulo' => 'Actualizar Datos de Alumno'];

		$vistas = view('Alumnos/header', $title).
		view('Alumnos/frmUpdate', $resultado).
		view('Alumnos/footer');
		return $vistas;
	} */

	public function delete($idAlumno){
		// print_r($_POST);
		$data = ['idAlumno' => $idAlumno ];//$idAlumno viene desde Routes.php, s un parametro que se recibe.
		$array = new CrudModel();
		$respuesta = $array->eliminar($data);

		if($respuesta){
			// redirecciona a la pagina principal del proyecto
			return redirect()->to(base_url().'/Inicio')->with('condicion','6');
		}else{
			return redirect()->to(base_url().'/Inicio')->with('condicion','7');
		}
	}
}
