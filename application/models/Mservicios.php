<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MServicios extends CI_Model
{

    public $variable;

    public function __construct()
    {
        parent::__construct();

    }

    public function obtenerCategorias()
    {
        $query = $this->db->get('categoria');
        return $query->result_array();
    }

    public function obtenerIdCategorias($nom)
    {

        $this->db->where('N_CAT', $nom);
        $query = $this->db->get('categoria');
        return $query->result_array();
    }

    public function obSubcatByCat($id_cat)
    {

        $this->db->where('ID_CAT', $id_cat);
        $query = $this->db->get('subcategoria');
        return $query->result_array();

    }

    public function obProByCat($id_cat)
    {

        if ($id_cat > 0) {

            $sql = "select subcategoria.N_SUBCAT, count(*) as productos from producto, subcategoria\n"
                . "WHERE\n"
                . "subcategoria.ID_SUBCAT=producto.ID_SUBCAT AND\n"
                . "subcategoria.ID_CAT=$id_cat\n"
                . "GROUP by subcategoria.N_SUBCAT\n"
                . "ORDER by count(*) DESC";

        } else {

            $sql = "select subcategoria.N_SUBCAT, count(*) as productos from producto, subcategoria\n"
                . "WHERE\n"
                . "subcategoria.ID_SUBCAT=producto.ID_SUBCAT\n"

                . "GROUP by subcategoria.N_SUBCAT\n"
                . "ORDER by count(*) DESC";

        }

        $query        = $this->db->query($sql);
        return $query = $query->result_array();

    }

    public function obSubcatAll()
    {
        $this->db->from('subcategoria');
        $this->db->order_by("RAND()");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function obtenerProductobySub($id)
    {
        $sql = "SELECT producto.ESTADO ,producto.PROIMG, subcategoria.SUBCATDESC, subcategoria.N_SUBCAT, producto.N_PROD, producto.PRECIO, producto.ID_PROD FROM subcategoria, producto WHERE subcategoria.N_SUBCAT='$id' AND\n"
            . "subcategoria.ID_SUBCAT=producto.ID_SUBCAT ORDER BY producto.PRECIO ASC";
        $query        = $this->db->query($sql);
        return $query = $query->result_array();

    }

    PUBLIC FUNCTION obtenerProductoRandom($id)
    {
        $sql = "SELECT producto.ESTADO ,producto.PROIMG, subcategoria.SUBCATDESC, subcategoria.N_SUBCAT, producto.N_PROD, producto.PRECIO, producto.ID_PROD FROM subcategoria, producto WHERE subcategoria.N_SUBCAT='$id' AND\n"
            . "subcategoria.ID_SUBCAT=producto.ID_SUBCAT AND producto.ESTADO=0 ORDER BY rand() ASC LIMIT 1";
        $query        = $this->db->query($sql);
        return $query = $query->result_array();
    }


}

/* End of file servicios.php */
/* Location: ./application/models/servicios.php */
