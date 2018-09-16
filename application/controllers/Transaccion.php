<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Transaccion extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('mtransaccion');
    }

    public function index()
    {

    }

    public function yaDeposite()
    {
        $id          = $_POST['id'];
        $comprobante = $_POST['comprobante'];
        $this->mtransaccion->actualizarDeposito($id, $comprobante);
    }

}

/* End of file Transaccion.php */
/* Location: ./application/controllers/Transaccion.php */
