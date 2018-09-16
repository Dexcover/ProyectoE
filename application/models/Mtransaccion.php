<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Mtransaccion extends CI_Model
{

    public $variable;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');

    }

    public function actualizarDeposito($id, $comprobante)
    {
        
        $id_usuario=$this->session->userdata('id_usuario');
        $this->db->where('ID_PEDIDO', $id);
        $query = $this->db->get('pedidos');
        $uso   = $query->result_array();
        $estado = $uso[0]['ESTADO'];
    
        if (strcmp($id_usuario, '3') != 0) {
                 $mensaje=$estado. "<p><b>&nbsp;&nbsp;&nbsp;Tú: </b>".$comprobante."</p>";
            }else{
                 $mensaje=$estado. "<p><b style='color: red;'>Admin: </b>".$comprobante."</p>";
            }
       

        $data = array('ESTADO' => $mensaje);

        $this->db->update('pedidos', $data, "ID_PEDIDO =$id");

    }
}

/* End of file Mtransaccion.php */
/* Location: ./application/models/Mtransaccion.php */
