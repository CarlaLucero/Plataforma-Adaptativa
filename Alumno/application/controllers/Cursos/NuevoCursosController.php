<?php

class NuevoCursosController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function load_NuevosCursos()
	{
		$this->load->view('Cursos/NuevosCursos');
	}
}
