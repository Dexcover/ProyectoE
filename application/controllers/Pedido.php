<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pedido extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('mpedido');
    }

    public function index()
    {
        $id_usuario = $this->session->userdata('id_usuario');

        if ($id_usuario == 3) {
            $datos['misPedidos'] = $this->mpedido->Pedidos($id_usuario);
        } else {
            $datos['misPedidos'] = $this->mpedido->pedidosUsuario($id_usuario);
        }

        #todos los pedidos
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('usuario/menu');
        $this->load->view('usuario/pedido', $datos);
        $this->load->view('usuario/pie');
        $this->load->view('layout/Extrafooter');
    }

    public function detallePedido()
    {
        if($this->session->userdata('id_usuario')!=null){
        $id   = $_POST['id'];
        $data = $this->mpedido->obtenerProductos($id);
        echo json_encode($data);
        }else{
            echo "acceso no autorizado";
        }
    }

}

/* End of file Pedido.php */
/* Location: ./application/controllers/Pedido.php */
