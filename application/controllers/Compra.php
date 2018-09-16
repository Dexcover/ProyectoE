<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Compra extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('mcarrito');
        $this->load->model('mmetricas');
        $this->load->model('Login_model');
    }

    public function index()
    {

    }

    public function registrarTarjeta()
    {
        $estado = "false";
        #post variables
        $ntarjeta  = $_POST['ntarjeta'];
        $expfecha  = $_POST['expfecha'];
        $codigocv  = $_POST['codigocv'];
        $cupon     = $_POST['cupon'];
        $direccion = $_POST['direccion'];

        $this->session->set_userdata('ntarjeta', $ntarjeta);
        $this->session->set_userdata('expfecha', $expfecha);
        $this->session->set_userdata('codigocv', $codigocv);
        $this->session->set_userdata('cupon', $cupon);
        $this->session->set_userdata('direccion', $direccion);

        #id_usuario
        if (!empty($this->session->userdata('id_usuario'))) {

            $id_usuario = $this->session->userdata('id_usuario');
            #guardar tarjeta
            $this->mcarrito->registrarTarjeta($ntarjeta, $expfecha, $codigocv, $id_usuario);

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
            $estado = "Su pago se debitará de su cuenta.";

            #total a cobrar
            $totalProducto = 0;
            foreach ($miPedido as $datos) {
                $mulCanPrec = bcmul($datos['precio'], $datos['cantidad'], 2);
                $totalProducto += $mulCanPrec;
            }

            #descontamos el cupon y sumamos en 1 a lo utilizado.
            $result = $this->mcarrito->descuento($cupon);
            if (count($result) > 0) {
                if ($result[0]['ESTADO'] > 0) {
                    $descuento     = $result[0]['DESCUENTO'];
                    $paso1         = bcmul($totalProducto, $descuento, 2);
                    $paso2         = bcdiv($paso1, 100, 2);
                    $paso3         = bcsub($totalProducto, $paso2, 2);
                    $totalProducto = $paso3;
                }
                $this->mcarrito->sumarCupon($cupon);
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

    public function registrarDeposito()
    {
        $estado = "false";
        #post variables
        $cupon     = $_POST['cupon'];
        $direccion = @$_POST['direccion'];

        $this->session->set_userdata('cupon', $cupon);
        $this->session->set_userdata('direccion', $direccion);

        #id_usuario
        if (!empty($this->session->userdata('id_usuario'))) {
            
            $miPedido = $this->session->userdata('carrito'); 
            
            if($miPedido!=null || !empty($miPedido)){
                
                $infor="Gracias por preferirnos y ser parte de nuestra familia <b>Bordintex</b>. En breves momentos te contactaremos. ";
                
                
                $estado = "<b>ENTREGA A DOMICILIO</b></br>";
                
                $this->session->set_userdata('direccion', $estado);
                
                $this->newRegistrarPedido($infor,true);
                #if all process are success
                $estado = "true";
            }

        }else{
            
            $miPedido = $this->session->userdata('carrito'); 
            
            if($miPedido!=null || !empty($miPedido)){
                #fecha
                date_default_timezone_set('UTC');
                date_default_timezone_set("America/Guayaquil");
                $fecha = date("y:m:d:h:i:s");
                
                $random = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
                
                $nombre = "visitante$random";
                
                $this->Login_model->registroForzado($nombre,$fecha);
                
                $infor="Bienvenid@, nos contactaremos con usted para la personalización de cada producto. Sientase libre de usar nuestro sistema para estar informad@.";
                
                $direccion = $this->session->userdata('direccion');
                
                $estado = "<b>ENTREGA A DOMICILIO</b></br>Su usuario es:</br><b>$nombre</b></br>su contraseña es:</br><b>bordintex</b>. </br> <p> Comunicación a través de: $direccion </p>";
                
                $this->session->set_userdata('direccion', $estado);
                
                $this->newRegistrarPedido($infor,true);
                #if all process are success
                $estado = "true";
            }
        }
        echo $estado;
    }

    #pass nos avisa si necesita hacer un recargo de envio o no?
    public function newRegistrarPedido($estadoP, $pass){
            $cupon     = $this->session->userdata('cupon');
            $direccion = $this->session->userdata('direccion');
        
            $id_usuario = $this->session->userdata('id_usuario');

            #traendo mi vector de pedidos
            $miPedido = $this->session->userdata('carrito');

            #my id_pedido
            $id_pedido = $this->mcarrito->maxPedido();

            #assign code 9999 because represent deposit transactions
            $id_tarjeta = 9999;

            #fecha
            date_default_timezone_set('UTC');
            date_default_timezone_set("America/Guayaquil");
            $fecha = date("y:m:d:h:i:s");

            #estado
            $estado = $estadoP;

            #total a cobrar
            $totalProducto = 0;
            foreach ($miPedido as $datos) {
                $mulCanPrec = bcmul($datos['precio'], $datos['cantidad'], 2);
                $totalProducto += $mulCanPrec;
            }

            #descontamos el cupon y sumamos en 1 a lo utilizado.
            $result = $this->mcarrito->descuento($cupon);
            if (count($result) > 0) {
                if ($result[0]['ESTADO'] > 0) {
                    $descuento     = $result[0]['DESCUENTO'];
                    $paso1         = bcmul($totalProducto, $descuento, 2);
                    $paso2         = bcdiv($paso1, 100, 2);
                    $paso3         = bcsub($totalProducto, $paso2, 2);
                    $totalProducto = $paso3;
                }
                $this->mcarrito->sumarCupon($cupon);
            }
            
            if($pass){
                $totalProducto = bcadd($totalProducto, 5.00, 2);
            }
            

            #guarda cabecera
            $this->mcarrito->registrarCabecera($id_pedido, $id_usuario, $id_tarjeta, $totalProducto, $fecha, $estado, $direccion, $cupon);

            #guarda Detalle productos
            foreach ($miPedido as $datos) {
                $this->mcarrito->registrarDetalle($id_pedido, $datos['id_producto'], $datos['cantidad']);
            }

            #borra carrito actual
            $miPedido = $this->session->set_userdata('carrito', null);
            $miPedido = $this->session->set_userdata('items', 0);

            #envia notificacion
            $this->notificacion($direccion);
    }
    
    public function registrarDestino()
    {
        $estado = "false";
        #post variables
        $cupon     = $_POST['cupon'];
        $direccion = @$_POST['direccion'];

        $this->session->set_userdata('cupon', $cupon);
        $this->session->set_userdata('direccion', $direccion);

        #id_usuario
        if (!empty($this->session->userdata('id_usuario'))) {
            
            $miPedido = $this->session->userdata('carrito'); 
            
            if($miPedido!=null || !empty($miPedido)){
                $infor="Gracias por preferirnos y ser parte de nuestra familia <b>Bordintex</b>. En breves momentos te contactaremos. ";
                
                
                $estado = "<b>ENTREGA EN LOCAL</b></br>";
                
                $this->session->set_userdata('direccion', $estado);
                
                $this->newRegistrarPedido($infor, false);
                #if all process are success
                $estado = "true";
            }

        }else{
            
          $miPedido = $this->session->userdata('carrito'); 
            
            if($miPedido!=null || !empty($miPedido)){
                #fecha
                date_default_timezone_set('UTC');
                date_default_timezone_set("America/Guayaquil");
                $fecha = date("y:m:d:h:i:s");
                
                $random = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );
                
                $nombre = "visitante$random";
                
                $this->Login_model->registroForzado($nombre,$fecha);
                
                $infor="Bienvenid@, nos contactaremos con usted para la personalización de cada producto. Sientase libre de usar nuestro sistema para estar informad@.";
                
                $direccion = $this->session->userdata('direccion');
                
                $estado = "<b>ENTREGA EN LOCAL</b></br>Su usuario es:</br><b>$nombre</b></br>su contraseña es:</br><b>bordintex</b>. </br> <p> Comunicación a través de: $direccion </p>";
                
                $this->session->set_userdata('direccion', $estado);
                
                $this->newRegistrarPedido($infor, false);
                #if all process are success
                $estado = "true";
            }
        }
        echo $estado;
    }

    public function descuento()
    {
        if(!Empty($this->session->userdata('carrito'))){
            $this->mmetricas->botonDescuento();
            #traendo mi vector de pedidos
            $miPedido      = $this->session->userdata('carrito');
            $totalProducto = 0;
            foreach ($miPedido as $datos) {
                $mulCanPrec = bcmul($datos['precio'], $datos['cantidad'], 2);
                $totalProducto += $mulCanPrec;
            }
            $totalProducto = bcadd($totalProducto, 0.00, 2);
    
            $descuento = $_POST['descuento'];
            $result    = $this->mcarrito->descuento($descuento);
            if (count($result) > 0) {
    
                $data = array('DESCUENTO' => $result[0]['DESCUENTO'],
                    'ACTIVO'                  => $result[0]['ESTADO'],
                    'TOTAL'                   => $totalProducto);
            } else {
                $data = array('DESCUENTO' => 0,
                    'ACTIVO'                  => 99,
                    'TOTAL'                   => $totalProducto);
            }
        }else{
             $data = array('DESCUENTO' => 0,
                    'ACTIVO'                  => 0,
                    'TOTAL'                   => 0);
        }
        echo json_encode($data);
        
    }

    public function notificacion($direccion)
    {
        date_default_timezone_set('UTC');
        date_default_timezone_set("America/Guayaquil");
        $fecha = date("y:m:d:h:i:s");
        @$Motivo  = "Compra - Realizada";
        @$Mensaje = "Usuario acaba de realizar venta.";
        $asunto    = "$Motivo | $fecha\n"; 
        $email_to  = "info@bordintex.com"; 
        $contenido = $Mensaje ." - ".$direccion;
        @mail($email_to, $asunto, $contenido); 
    }


}

/* End of file Compra.php */
/* Location: ./application/controllers/Compra.php */
