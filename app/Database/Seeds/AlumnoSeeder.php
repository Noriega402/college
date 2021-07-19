<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AlumnoSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'nombreAlumno' => 'Melany Andrea',
			'apellidoAlumno'  => 'Salazar Cruz',
			'edad'  => '17',
		];

		$this->db->table('alumnos')->insert($data);
	}
}
