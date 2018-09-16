<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Servicios extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

        $this->load->model('mservicios');

        $this->load->model('mmetricas');

    }
    public function index()
    {

        $data['categorias'] = $this->mservicios->obtenerCategorias();
        $this->load->view('layout/layserv/header');
        $this->load->view('layout/navbar');
        $this->load->view('servicios/index', $data);
        $this->load->view('layout/layserv/footer');
    }

    public function bordados()
    {
        $this->load->view('layout/layserv/header');
        $this->load->view('layout/navbar');
        $this->load->view('servicios/bordados');
        $this->load->view('layout/layserv/footer');
    }

    public function subcategorias()
    {
        /*
        En el caso que si ecnontrara, falta programar cuando no hayga resultados
         */
        $busqueda  = $_GET['id'];
        $servicios = $this->mservicios->obtenerIdCategorias($busqueda);

        $cont = 0;
        foreach ($servicios as $s) {
            $cont++;
        }

        $pass = false;
        if ($cont == 0) {

            $servicioss[0]['N_CAT']   = 'Productos y Servicios en Bordintex';
            $servicioss[0]['CATDESC'] = 'Eficaz, Responsable y Confiable.';
            $data['servicios']        = $servicioss;
            $pass                     = true;
        } else {
            $data['servicios'] = $servicios;
        }

        if (!$pass) {

            foreach ($servicios as $s) {
                $id_cat = $s['ID_CAT'];
            }

            $data['subcategorias'] = $this->mservicios->obSubcatByCat($id_cat);
            $data['productos']     = $this->mservicios->obProByCat($id_cat);

        } else {
            $id_cat                = 0;
            $data['subcategorias'] = $this->mservicios->obSubcatAll();
            $data['productos']     = $this->mservicios->obProByCat($id_cat);
        }

        $this->load->view('layout/layserv/header');
        $this->load->view('layout/navbar');
        $this->load->view('servicios/subcategorias', $data);
        $this->load->view('layout/layserv/footer');

    }

    public function obtenerProductobySub()
    {
        $this->mmetricas->metricaConsultarProductos();
        $id   = $_POST['id'];
        $data = $this->mservicios->obtenerProductobySub($id);
        echo json_encode($data);

    }

}

/* End of file servicios.php */
/* Location: ./application/controllers/servicios.php */
