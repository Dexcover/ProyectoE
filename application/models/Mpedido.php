<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Mpedido extends CI_Model
{

    public $variable;

    public function __construct()
    {
        parent::__construct();

    }

    public function Pedidos()
    {
        $sql = "SELECT pedidos.ID_PEDIDO, usuario.apellido, pedidos.FECHA, pedidos.ESTADO, pedidos.TOTAL_COBRAR, pedidos.DIRECCION_ENVIO, pedidos.cupon, pedidos.ID_TARJETA  FROM pedidos, usuario WHERE pedidos.ID_USUARIO=usuario.id_usuario";

        $query        = $this->db->query($sql);
        return $query = $query->result_array();
    }
    public function pedidosUsuario($id)
    {
        $this->db->where('ID_USUARIO', $id);
        $query = $this->db->get('pedidos');
        return $query->result_array();
    }

    public function obtenerProductos($id)
    {
        $sql = "SELECT producto.N_PROD, detalle_pedido.CANTIDAD_PEDIDA FROM producto, pedidos, detalle_pedido WHERE \n"

            . "pedidos.ID_PEDIDO=detalle_pedido.ID_PEDIDO AND\n"

            . "detalle_pedido.ID_PRODUCTO=producto.ID_PROD AND\n"

            . "pedidos.ID_PEDIDO='$id'";
        $query        = $this->db->query($sql);
        return $query = $query->result_array();

    }

} /* End of file Mpedido.php *//* Location: ./application/models/Mpedido.php */
