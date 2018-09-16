<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mservicios');
        $this->load->library('session');

    }

    public function index()
    {

        if (empty($this->session->userdata("cedula")) && empty($this->session->userdata("items")) && empty($this->session->userdata("carrito"))) {
            $miPedido = null;
            $newdata  = array(
                'items'   => 0,
                'carrito' => $miPedido,
            );

            $this->session->set_userdata($newdata);
        }

        $subcategorias= $this->mservicios->obSubcatAll();
        $data['subcategorias'] =$subcategorias;

        $seccionCarro=null;
        foreach($subcategorias as $value=> $key )
        {
            $dato=$this->mservicios->obtenerProductoRandom($key["N_SUBCAT"]);
            if(!empty($dato)){
                $seccionCarro[]=$dato;
            }
        }

        $data['seccionCarro'] =$seccionCarro;

        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('layout/slider');
        $this->load->view('home', $data);
        $this->load->view('layout/footer');

        $this->output->cache(TIEMPO_CACHE);
        $this->output->delete_cache();
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
