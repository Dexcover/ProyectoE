<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Mmetricas extends CI_Model
{

    public $variable;

    public function __construct()
    {
        parent::__construct();

    }

    public function metricaConsultarProductos()
    {
        $this->db->where('ID_METRICA', 1);
        $query = $this->db->get('METRICAS');
        $uso   = $query->result_array();

        $usom = $uso[0]['USO'] + 1;

        $data = array('USO' => $usom);

        $this->db->update('METRICAS', $data, "ID_METRICA =1");

    }

    public function addProductosCarro()
    {
        $this->db->where('ID_METRICA', 2);
        $query = $this->db->get('METRICAS');
        $uso   = $query->result_array();

        $usom = $uso[0]['USO'] + 1;

        $data = array('USO' => $usom);

        $this->db->update('METRICAS', $data, "ID_METRICA =2");

    }

    public function iniciarSesion()
    {
        $this->db->where('ID_METRICA', 3);
        $query = $this->db->get('METRICAS');
        $uso   = $query->result_array();

        $usom = $uso[0]['USO'] + 1;

        $data = array('USO' => $usom);

        $this->db->update('METRICAS', $data, "ID_METRICA =3");

    }

    public function botonIrCaja()
    {
        $this->db->where('ID_METRICA', 4);
        $query = $this->db->get('METRICAS');
        $uso   = $query->result_array();

        $usom = $uso[0]['USO'] + 1;

        $data = array('USO' => $usom);

        $this->db->update('METRICAS', $data, "ID_METRICA =4");

    }

    public function botonDescuento()
    {
        $this->db->where('ID_METRICA', 5);
        $query = $this->db->get('METRICAS');
        $uso   = $query->result_array();

        $usom = $uso[0]['USO'] + 1;

        $data = array('USO' => $usom);

        $this->db->update('METRICAS', $data, "ID_METRICA =5");

    }

}

/* End of file Mmetricas.php */
/* Location: ./application/models/Mmetricas.php */
