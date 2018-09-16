<?php
class Login_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
        parent::__construct();
        $this->load->library('encryption');
        $this->load->library('session');
    }
    public function set_users()
    {
        $this->load->helper('url');
        ////metodo de encriptacion

        $encrypted_pass = $this->encryption->encrypt($this->input->post('contraseña'));
        $data           = array(
            'nombre'           => $this->input->post('nombre'),
            'apellido'         => $this->input->post('apellido'),
            'cedula'           => $this->input->post('cedula'),
            'contraseña'       => $encrypted_pass,
            'correo'           => $this->input->post('correo'),
            'fecha_nacimiento' => $this->input->post('fecha'),
            'nick'             => $this->input->post('nick'),
        );

        $this->db->insert('usuario', $data);
        $this->sesiones($this->input->post('nick'));
    }
    
    public function registroForzado($nombre,$fecha)
    {
        $encrypted_pass = $this->encryption->encrypt("bordintex");
        $data           = array(
            'nombre'           => $nombre,
            'apellido'         => "--",
            'cedula'           => "1111111111",
            'contraseña'       => $encrypted_pass,
            'correo'           => "000000@sincorreo.com",
            'fecha_nacimiento' => $fecha,
            'nick'             => $nombre,
        );

        $this->db->insert('usuario', $data);
        $this->sesiones($nombre);
    }
    
    public function comprobar($user, $pass)
    {
        $this->db->select('cedula,nombre,apellido,nick,contraseña,correo');
        $this->db->where('nick', $user);
        $query = $this->db->get('usuario');
        if ($query->num_rows() == 1) {
            $consulta         = $query->row();
            $encriptado       = $consulta->contraseña;
            $encrypted_string = $this->encryption->decrypt($encriptado);
            if (strcmp($encrypted_string, $pass) === 0) {
                return $query->result_array();
            }
        }
    }

    public function sesiones($user)
    {

        $carrito = $this->session->userdata('carrito');
        $items   = count($carrito);

        $verificacion = false;
        $this->db->select('id_usuario,cedula,nombre,apellido,nick,contraseña,correo');
        $this->db->where('nick', $user);
        $query = $this->db->get('usuario');
        if ($query->num_rows() == 1) {
            $consulta   = $query->row();
            $id_usuario = $consulta->id_usuario;
            $cedula     = $consulta->cedula;
            $nombre     = $consulta->nombre;
            $apellido   = $consulta->apellido;
            $correo     = $consulta->correo;
            $nick       = $consulta->nick;
            $passwd     = $consulta->contraseña;

            $newdata = array(
                'id_usuario' => $id_usuario,
                'cedula'     => $cedula,
                'nombres'    => $nombre,
                'apellidos'  => $apellido,
                'correo'     => $correo,
                'nick'       => $nick,
                'passwd'     => $passwd,
                'logged_in'  => true,
                'items'      => $items,
                'carrito'    => $carrito,
            );

            $this->session->set_userdata($newdata);

            if (strcmp($cedula, '1719668871') == 0) {
                $verificacion = true;
            }

        }

        return $verificacion;

    }

    public function cambiarCon()
    {
        $cAntigua = $this->input->post('cA');
        $cNueva   = $this->input->post('cN');
        $cNuevaR  = $this->input->post('cNR');

        $usuario          = $this->session->userdata('cedula');
        $pass             = $this->session->userdata('passwd');
        $encrypted_string = $this->encrypt->decode($pass);
        $ced              = $this->session->userdata('cedula');

        $encrypted_paswd = $this->encrypt->encode($cNuevaR);

        if (strcmp($encrypted_string, $cAntigua) === 0) {
            if (strcmp($cNueva, $cNuevaR) === 0) {
                $data = array(
                    'contraseña' => $encrypted_paswd,
                );
                $this->db->where('cedula', $ced);
                $this->db->update('usuario', $data);

            } else {
                echo "<script>
                    alert('Las contraseñas nuevas no coinciden');
                    </script>";
            }
        } else {
            echo "<script>
                    alert('La contraseña antigua no coincide');
                    </script>";
        }
    }

}
