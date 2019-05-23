<?php

class Cursos_Model extends CI_Model{
    private $table;
    public function __construct()
    {
        $this->table = "Cursos";
        parent::__construct();
        $this->load->database();
    }


    public function ConsultarCursos()
    {
        $this->db->select($this->table.'.*');
        $this->db->from($this->table);
        $query = $this->db->get();

        return $query->result_array();
    } 
}