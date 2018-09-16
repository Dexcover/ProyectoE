<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Carrito extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('mcarrito');
        $this->load->library('encryption');
        $this->load->model('mmetricas');
    }

    public function index()
    {

        if (empty($this->session->userdata("cedula"))) {
            $this->load->view('layout/header');
            $this->load->view('layout/navbar');
            $this->load->view('visitante/menu');
            $this->load->view('visitante/carrito');
            $this->load->view('visitante/pie');
            $this->load->view('layout/Extrafooter');
        } else {

            $this->load->view('layout/header');
            $this->load->view('layout/navbar');
            $this->load->view('usuario/menu');
            $this->load->view('usuario/carrito');
            $this->load->view('usuario/pie');
            $this->load->view('layout/Extrafooter');
        }
    }

    public function addProduct()
    {
        $this->mmetricas->addProductosCarro();

        #Traendo datos
        $id   = $_POST['id'];
        $dato = $this->mcarrito->Producto($id);

        #datos de la consulta
        $id_producto = $dato[0]['ID_PROD'];
        $nombre      = $dato[0]['N_PROD'];
        $img         = $dato[0]['PROIMG'];
        $desc        = $dato[0]['PRODESC'];
        $precio      = $dato[0]['PRECIO'];

        #traendo mi vector de pedidos
        $miPedido = $this->session->userdata('carrito');

        $indice = false;
        #searchiing if the product already exists
        if (count($miPedido) > 0) {
            foreach ($miPedido as $datos) {
                if (strcmp($datos['id_producto'], $id_producto) === 0) {
                    $indice = true;
                }
            }
        }

        if (!$indice) {
            #seteando mi objeto
            $carro = array(
                'id_producto' => $id_producto,
                'producto'    => $nombre,
                'img'         => $img,
                'desc'        => $desc,
                'precio'      => $precio,
                'cantidad'    => 1);

            #ingrese un nuevo producto más
            $miPedido[] = $carro;

            #cuente cuentos productos existe
            $cNueva = count($miPedido);

            #seteo otra ves mi variable pedidos
            $this->session->set_userdata('carrito', $miPedido);

            #seteo cantidad de items
            $this->session->set_userdata('items', $cNueva);
        } else {
            $cNueva = count($miPedido);
        }

        echo $cNueva;
    }

    public function deleteProduct()
    {
        $id = $_POST['id'];
        #traendo mi vector de pedidos
        $miPedido = $this->session->userdata('carrito');

        #buscando el indice para borrarlo
        $cont   = 0;
        $indice = 0;
        foreach ($miPedido as $datos) {
            if (strcmp($datos['id_producto'], $id) === 0) {
                $indice = $cont;
            }
            $cont += 1;
        }

        #eliminando de mi vector
        unset($miPedido[$indice]);

        #cuente cuentos productos existe
        $cNueva = count($miPedido);

        #se reordene
        $miPedido = array_values($miPedido);

        #seteo otra ves mi variable pedidos
        $this->session->set_userdata('carrito', $miPedido);

        #seteo cantidad de items
        $this->session->set_userdata('items', $cNueva);

        echo $cNueva;

    }

    public function updateProduct()
    {
        $id            = $_POST['id'];
        $nuevaCantidad = $_POST['cantidad'];

        #traendo mi vector de pedidos
        $miPedido = $this->session->userdata('carrito');

        #buscando el indice para actualizarlo
        $cont   = 0;
        $indice = 0;
        foreach ($miPedido as $datos) {
            if (strcmp($datos['id_producto'], $id) === 0) {
                $indice = $cont;
            }
            $cont += 1;
        }

        $miPedido[$indice]['cantidad'] = $nuevaCantidad;

        #seteo otra ves mi variable pedidos
        $this->session->set_userdata('carrito', $miPedido);

    }

    public function clave()
    {
        echo $this->encryption->create_key(16);
    }

}

/* End of file Carrito.php */
/* Location: ./application/controllers/Carrito.php */
