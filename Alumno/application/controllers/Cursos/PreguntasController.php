<?php

class PreguntasController extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Inscrito_modal');
        $this->load->helper('url_helper');
    }

	public function load_Preguntas()
	{
		$this->load->view('Cursos/Preguntas');
	}

	public function IncribirAlumno()
	{	
		$id = $this->input->get('IdCurso');
		$idUsuario = $this->input->get('idUsuario');
		
		$Curso = $this->Inscrito_modal->IncribirAlumno($id,$idUsuario);
		
		if($Curso != 0)
			echo 'Se inscribio al curso';
		else
			echo 'No inscribio al curso';
	}
}
