<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mcarrito extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function Producto($id)
    {
        $this->db->where('ID_PROD', $id);
        $query = $this->db->get('producto');
        return $query->result_array();
    }

    public function Tarjeta($id)
    {
        $this->db->where('card_number', $id);
        $query = $this->db->get('tarjetas');
        return $query->result_array();
    }

    public function registrarTarjeta($ntarjeta, $expfecha, $codigocv, $id_usuario)
    {
        $data = array('id_usuario' => $id_usuario,
            'card_number'              => $ntarjeta,
            'expiration_date'          => $expfecha,
            'cv_code'                  => $codigocv);
        $this->db->insert('tarjetas', $data);
    }

    public function maxPedido()
    {
        $this->db->select_max('id_pedido');
        $query  = $this->db->get('pedidos');
        $result = $query->row()->id_pedido;
        return ($result + 1);
    }

    public function registrarCabecera($id_pedido, $id_usuario, $id_tarjeta, $totalProducto, $fecha, $estado, $direccion, $cupon)
    {

        $data = array('id_pedido' => $id_pedido,
            'id_usuario'              => $id_usuario,
            'id_tarjeta'              => $id_tarjeta,
            'total_cobrar'            => $totalProducto,
            'fecha'                   => $fecha,
            'estado'                  => $estado,
            'direccion_envio'         => $direccion,
            'cupon'                   => $cupon);

        $this->db->insert('pedidos', $data);

    }

    public function registrarDetalle($id_pedido, $id_producto, $cantidad)
    {
        $data = array('id_pedido' => $id_pedido,
            'id_producto'             => $id_producto,
            'cantidad_pedida'         => $cantidad);

        $this->db->insert('detalle_pedido', $data);
    }

    public function descuento($descuento)
    {

        $this->db->where('cupon', $descuento);
        $query = $this->db->get('cupones');
        return $query->result_array();
    }

    public function sumarCupon($descuento)
    {
        $this->db->where('cupon', $descuento);
        $query = $this->db->get('cupones');
        $uso   = $query->result_array();

        $usom = $uso[0]['USO'] + 1;

        $data = array('USO' => $usom);

        $this->db->update('cupones', $data, "cupon ='$descuento'");
    }

}

/* End of file Mcarrito.php */
/* Location: ./application/models/Mcarrito.php */
