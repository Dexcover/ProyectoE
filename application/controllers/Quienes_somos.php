<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Quienes_somos extends CI_Controller
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
        $this->load->view('quienes-somos');
        $this->load->view('layout/Extrafooter');
    }

}

/* End of file Quienes_somos.php */
/* Location: ./application/controllers/Quienes_somos.php */
