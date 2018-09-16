<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Productos extends CI_Controller
{

    public function index()
    {

    }

    public function gorras()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('productos/gorras');
        $this->load->view('layout/layserv/footer');
    }

    public function camisetas_polo()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('productos/camistas-polo');
        $this->load->view('layout/footer');
    }

    public function camisetas()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('productos/camisetas');
        $this->load->view('layout/footer');
    }

    public function tazas()
    {

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('productos/tazas');
        $this->load->view('layout/footer');
    }

}

/* End of file productos.php */
/* Location: ./application/controllers/productos.php */
