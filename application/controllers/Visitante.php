<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Visitante extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('visitante/menu');
        $this->load->view('visitante/perfil');
        $this->load->view('visitante/pie');
        $this->load->view('layout/Extrafooter');
    }

}

/* End of file Visitante.php */
/* Location: ./application/controllers/Visitante.php */
