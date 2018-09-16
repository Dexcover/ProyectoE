<?php
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->helper('url_helper');
        $this->load->helper('url');
        $this->load->model('mservicios');
        $this->load->model('mcarrito');
        $this->load->model('mpedido');
        $this->load->model('mmetricas');

    }
    public function index()
    {
        if (empty($this->session->userdata("cedula"))) {
            if (!isset($_POST['user']) || !isset($_POST['clave'])) {
                $this->load->view('layout-auth/header');
                $this->load->view('layout/navbar');
                $this->load->view('auth/login');
                $this->load->view('layout-auth/footer');
            }
        } else {
            $this->load->view('layout-auth/header');
            $this->load->view('layout/navbar');
            $this->load->view('usuario/menu');
            $this->load->view('usuario/perfil');
            $this->load->view('usuario/pie');
            $this->load->view('layout/Extrafooter');
        }
    }

    public function compraInicio()
    {

    }

    public function logout()
    {
        $this->session->sess_destroy();
        header("Location:" . base_url());
    }

    public function verificar()
    {

        $this->load->view('layout-auth/header');
        $this->load->view('layout/navbar');
        $this->load->view('index.php/auth/verificar');
        $this->load->view('layout/footer');

    }

    public function memegen()
    {

        $this->load->view('layout-auth/header');
        $this->load->view('layout/navbar');
        $this->load->view('index.php/auth/memegen');
        $this->load->view('layout/footer');

    }

    public function restablecer()
    {
        $mensaje="ESTA FUNCIÓN NO ESTA DISPONIBLE POR EL MOMENTO.";
        $data['mensaje']=$mensaje;    
        $this->load->view('layout-auth/header');
        $this->load->view('layout/navbar');
        $this->load->view('auth/restablecer',$data);
        $this->load->view('layout-auth/footer');

    }

    public function registrar()
    {

        if (!empty($this->session->userdata("cedula"))) {
            //cuando un usuario previamente logeado ingresa a resgistrar
            $this->load->view('layout-auth/header');
            $this->load->view('layout/navbar');
            $this->load->view('usuario/menu');
            $this->load->view('usuario/perfil');
            $this->load->view('usuario/pie');
            $this->load->view('layout/Extrafooter');
            return false;
        }

        if(!isset($_POST['cedula'])){  
            $this->load->view('layout-auth/header');
            $this->load->view('layout/navbar');
            $this->load->view('auth/register');
            $this->load->view('layout-auth/footer');
            return false;
        }

        @$Cedula  = htmlspecialchars($_POST['cedula']);
        @$Nombre  = htmlspecialchars($_POST['nombre']);
        @$Apellido  = htmlspecialchars($_POST['apellido']);
        @$Correo  = htmlspecialchars($_POST['correo']);
        @$Fecha  = htmlspecialchars($_POST['fecha']);
        @$Nick  = htmlspecialchars($_POST['nick']);
        @$Contra  = htmlspecialchars($_POST['contraseña']);

        if(Empty($Cedula) or Empty($Nombre) or Empty($Apellido) or Empty($Correo) 
        or Empty($Fecha) or Empty($Nick) or Empty($Contra)){
            $mensaje="Sus datos no tienen un formato vàlido para registarlo. Reintente por favor.";
            $data['mensaje']=$mensaje;  
            $this->load->view('layout-auth/header');
            $this->load->view('layout/navbar');
            $this->load->view('auth/register', $data);
            $this->load->view('layout-auth/footer');
            return false;
        }
        $status=$this->login_model->set_users($Nombre, $Apellido, $Cedula, $Contra, $Correo, $Fecha, $Nick); 
        if($status){
                $this->load->view('layout-auth/header');
                $this->load->view('layout/navbar');
                $this->load->view('usuario/menu');
                $this->load->view('usuario/perfil');
                $this->load->view('usuario/pie');
                $this->load->view('layout/Extrafooter');
         }else{
                $mensaje="Sus datos presentan un tipo de inconsistencia, nick o correo electrónicos ya están en uso";
                $data['mensaje']=$mensaje;  
                $this->load->view('layout-auth/header');
                $this->load->view('layout/navbar');
                $this->load->view('auth/register', $data);
                $this->load->view('layout-auth/footer');
        }  
       

        
           
    }

    public function login()
    {
        if (!empty($this->session->userdata("cedula"))) {
            //cuando un usuario previamente logeado ingresa a resgistrar
            $this->load->view('layout-auth/header');
            $this->load->view('layout/navbar');
            $this->load->view('usuario/menu');
            $this->load->view('usuario/perfil');
            $this->load->view('usuario/pie');
            $this->load->view('layout/Extrafooter');
            return false;
        }

        if(!isset($_POST['user']) or !isset($_POST['clave'])){  
            $this->load->view('layout-auth/header');
            $this->load->view('layout/navbar');
            $this->load->view('auth/login');
            $this->load->view('layout-auth/footer');
            return false;
        }


        $validar['usuario'] = $this->login_model->comprobar($_POST['user'], $_POST['clave']);

        if ($validar['usuario']) {

        //Valida si es usuario Administrador y guarda sesiones
          $verificacion = $this->login_model->sesiones($_POST['user']);

            if ($verificacion) {

                header('Location: ../Examples');

            } else {
                            $this->mmetricas->iniciarSesion();
                            $this->load->view('layout-auth/header');
                            $this->load->view('layout/navbar');
                            $this->load->view('usuario/menu');
                            $this->load->view('usuario/perfil');
                            $this->load->view('usuario/pie');
                            $this->load->view('layout/Extrafooter');

                    }

        } else {
                    //    Si no logró validar
                    $mensaje="Sus datos no pudieron ser comprobados en nuestro sistema. Reintente por favor.";
                    $data['mensaje']=$mensaje;  
                    $this->load->view('layout-auth/header');
                    $this->load->view('layout/navbar');
                    $this->load->view('auth/login', $data);
                    $this->load->view('layout-auth/footer');

        }
           
        

    }
    public function about()
    {
        $this->load->view('templates/header');
        $this->load->view('auth/about');
        $this->load->view('templates/footer');
    }

    public function about2()
    {
        $this->load->view('templates/header2');
        $this->load->view('auth/about');
        $this->load->view('templates/footer');
    }

    public function cerrar_sesion()
    {
        $this->session->sess_destroy();
        $this->load->helper('form');

        $this->load->view('layout-auth/header');
        $this->load->view('layout/navbar');
        $this->load->view('index.php/auth/login');
        $this->load->view('layout/footer');

    }

    public function cambiarC()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('cA', 'cA', 'required');
        $this->form_validation->set_rules('cN', 'cN', 'required');
        $this->form_validation->set_rules('cNR', 'cNR', 'required');

        if ($this->form_validation->run() === false) {

            $this->load->view('layout-auth/header');
            $this->load->view('layout/navbar');
            $this->load->view('index.php/auth/cambiarCon');
            $this->load->view('layout/footer');

        } else {
            $this->login_model->cambiarCon();
            echo "<script>
                    alert('Su contraseña se a cambiado con exito');
                    </script>";
            $this->session->sess_destroy();

            $this->load->view('layout-auth/header');
            $this->load->view('layout/navbar');
            $this->load->view('index.php/auth/login');
            $this->load->view('layout/footer');

        }

    }

    public function compra()
    {

        $estado = "false";
        #post variables
        $ntarjeta  = $this->session->userdata('ntarjeta');
        $expfecha  = $this->session->userdata('expfecha');
        $codigocv  = $this->session->userdata('codigocv');
        $cupon     = $this->session->userdata('cupon');
        $direccion = $this->session->userdata('direccion');

        #id_usuario
        if (!empty($this->session->userdata('id_usuario'))) {

            $id_usuario = $this->session->userdata('id_usuario');
            #guardar tarjeta
            $this->mcarrito->registrarTarjeta($ntarjeta, $expfecha, $codigocv, $cupon, $id_usuario);

            #traendo mi vector de pedidos
            $miPedido = $this->session->userdata('carrito');

            #my id_pedido
            $id_pedido = $this->mcarrito->maxPedido();

            #my id_tarjeta
            $dato       = $this->mcarrito->Tarjeta($ntarjeta);
            $id_tarjeta = $dato[0]['ID_TARJETAS'];

            #fecha
            date_default_timezone_set('UTC');
            date_default_timezone_set("America/Guayaquil");
            $fecha = date("y:m:d:h:i:s");

            #estado
            $estado = "En proceso";

            #total a cobrar
            $totalProducto = 0;
            foreach ($miPedido as $datos) {
                $mulCanPrec = bcmul($datos['precio'], $datos['cantidad'], 2);
                $totalProducto += $mulCanPrec;
            }

            $totalProducto = bcadd($totalProducto, 5.00, 2);

            #guarda cabecera

            $this->mcarrito->registrarCabecera($id_pedido, $id_usuario, $id_tarjeta, $totalProducto, $fecha, $estado, $direccion, $cupon);

            #guarda Detalle productos
            foreach ($miPedido as $datos) {
                $this->mcarrito->registrarDetalle($id_pedido, $datos['id_producto'], $datos['cantidad']);
            }

            #if all process are success
            $estado = "true";

            #borra carrito actual
            $miPedido = $this->session->set_userdata('carrito', null);
            $miPedido = $this->session->set_userdata('items', 0);

        }
        echo $estado;

    }

}
