<?php

class PreguntasController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function load_Preguntas()
	{
		$this->load->view('Cursos/Preguntas');
	}
}