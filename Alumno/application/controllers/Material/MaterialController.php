<?php

class MaterialController extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

        public function load_Material()
	{
                $this->load->view('Material/Material');
	}
}
