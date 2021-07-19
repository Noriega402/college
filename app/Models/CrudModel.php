<?php namespace App\Models;

    use CodeIgniter\Model;

    class CrudModel extends Model{

        public function listarAlumnos(){
            $alumnos = $this->db->query("SELECT *FROM alumnos");
            return $alumnos->getResult();
        }

        public function obtenerDatos($data){
            $alumnos = $this->db->table('alumnos');
            $alumnos->where($data);
            return $alumnos->get()->getResultArray();
        }

        public function insertar($datos){
            $nombres = $this->db->table('alumnos');
            $nombres->insert($datos);

            return $this->db->insertID();
        }

        public function actualizar($data, $idAlumno){
            $alumnos = $this->db->table('alumnos');
            $alumnos->set($data);
            $alumnos->where('idAlumno',$idAlumno);

            return  $alumnos->update();
        }

        public function eliminar($data){
            $alumnos = $this->db->table('alumnos');
            $alumnos->where($data);
            return  $alumnos->delete();
        }
    }