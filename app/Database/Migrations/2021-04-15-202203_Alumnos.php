<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alumnos extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'idAlumno'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'nombreAlumno'       => [
					'type'       => 'VARCHAR',
					'constraint' => '70',
			],
			'apellidoAlumno' => [
					'type' => 'VARCHAR',
					'constraint' => '70',
			],
			'edad' => [
					'type' => 'NUMERIC',
					'constraint' => '2,0',
			],
		]);
			$this->forge->addKey('idAlumno', true);
			$this->forge->createTable('alumnos');
	}

	public function down()
	{
		$this->forge->dropTable('alumnos');
	}
}
