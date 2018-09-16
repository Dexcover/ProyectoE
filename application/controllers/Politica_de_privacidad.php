<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Politica_de_privacidad extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('politica-privacidad');
		$this->load->view('layout/Extrafooter');
		$this->output->cache(TIEMPO_CACHE);
	}

}

/* End of file Politica-de-privacidad.php */
/* Location: ./application/controllers/Politica-de-privacidad.php */