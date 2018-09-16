<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Contacto extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('email');
    }

    public function index()
    {
        $this->load->view('layout/contacto/header');
        $this->load->view('layout/navbar');
        $this->load->view('contacto');
        $this->load->view('layout/contacto/Extrafooter');
    }

    public function contactar_unused()
    {

        date_default_timezone_set('UTC');
        date_default_timezone_set("America/Guayaquil");
        $fecha = date("y:m:d:h:i:s");

        @$Motivo  = htmlspecialchars($_POST['Motivo']);
        @$Empresa = htmlspecialchars($_POST['Empresa']);
        @$Correo  = htmlspecialchars($_POST['Correo']);
        @$Mensaje = htmlspecialchars($_POST['Mensaje']);

//Preparamos el mensaje de contacto
        $cabeceras = "From: $Correo\n"//La persona que envia el correo
         . "Reply-To: $Correo\n";
        $asunto    = "Bordintex Contacto: $Motivo | $fecha\n"; //asunto aparecera en la bandeja del servidor de correo
        $email_to  = "gerencia@bordintex.com, info@bordintex.com"; //cambiar por tu email
        $contenido = "Han enviado un mensaje desde el sitio web www.bordintex.com\n"
            . "\n"
            . "Motivo: $Motivo\n"
            . "Empresa: $Empresa\n"
            . "Correo: $Correo\n"
            . "Mensaje: $Mensaje\n"
            . "\n";
//Enviamos el mensaje y comprobamos el resultado
        if (@mail($email_to, $asunto, $contenido, $cabeceras)) {

//Si el mensaje se envía muestra una confirmación
            echo '<div class="modal fade" id="modalRespuestaContacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <strong>Su mensaje ha sido enviado correctamente.</strong>
    </div>
  </div>
</div>';
        } else {
//Si el mensaje no se envía muestra el mensaje de error
            echo '<div class="modal fade" id="modalRespuestaContacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <strong>ERROR. Intente mas tarde. ó envie su mensaje a info@bordintex.com</strong>
    </div>
  </div>
</div>';
        }
    }

    public function reArrayFiles($file)
    {
        $file_ary   = array();
        $file_count = count($file['name']);
        $file_key   = array_keys($file);

        for ($i = 0; $i < $file_count; $i++) {
            foreach ($file_key as $val) {
                $file_ary[$i][$val] = $file[$val][$i];
            }
        }
        return $file_ary;
    }

    public function contactarSecurity()
    {
        
        date_default_timezone_set('UTC');
        date_default_timezone_set("America/Guayaquil");
        $fecha = date("y:m:d:h:i:s");

        @$Motivo  = htmlspecialchars($_POST['Motivo']);
        @$Empresa = htmlspecialchars($_POST['Empresa']);
        @$Correo  = htmlspecialchars($_POST['Correo']);
        @$Mensaje = htmlspecialchars($_POST['Mensaje']);
        
        #valida que esten campos necesario completos
         if(Empty($Empresa) or Empty($Correo)){
        $mensaje = "<div style='text-align: center'> <div class='alert alert-danger' role='alert'>No se ha podido enviar su requerimiento, revise si ingresa la información apropiadamente.</div></div>"; 
        $data['mensaje'] = $mensaje;
        $this->load->view('layout/contacto/header');
        $this->load->view('layout/navbar');
        $this->load->view('contacto', $data);
        $this->load->view('layout/contacto/Extrafooter');
        return false; 
        }
        
        $img         = $_FILES['files'];
        
        $contImg=0;
        if (!empty($img) || $img !=null) {
            $img_desc = $this->reArrayFiles($img);
            if(!empty($img_desc)){
                foreach ($img_desc as $val) {
                    $newname = date('YmdHis', time()) . mt_rand() . '.jpg';
                    $target_path = "public/contacto/";
                    $target_path = "$target_path$newname";
                    move_uploaded_file($val['tmp_name'], $target_path);
                    $this->email->attach($target_path);
                    
                    if (file_exists($target_path)) {
                        $contImg++;
                    } 
                }
                
                #Concatenar Tamaño y cantidad de diseños
                if($contImg>0){
                    $producto="";
                    for ($i=1; $i<=$contImg; $i++){
                      $tamanio=$_POST['tamanio'.$i.''];
                      $cantidad=$_POST['cantidad'.$i.''];
                      $producto.="\n Imagen $i: Tamaño a considerar: $tamanio  Cantidad a considerar: $cantidad";  
                    }
                    $Mensaje.=$producto;
                }
            }
        }
        
        $this->email->from($Correo, $Empresa);
        $this->email->to('gerencia@bordintex.com');
        $this->email->cc('info@bordintex.com');
        $this->email->bcc('contacto@bordintex.com');
        $this->email->subject('Bordintex Contacto: ' . $Motivo);
        
        
        $this->email->message('Especificaciones realizadas: ' . $Mensaje);
        if (!$this->email->send()) {
             $html = "<div style='text-align: center'> <div class='alert alert-danger' role='alert'>No se ha enviado su correo, pruebe a reintentar otra vez...</div></div>";
        } else {
           $html = "<div style='text-align: center'> <div class='alert alert-success' role='alert'>Mensaje enviado satisfactoriamente. Si no recibes respuesta revisa tu bandeja de correos no deseados.</div></div>";
        }
        $data['mensaje']=$html;
        $this->load->view('layout/contacto/header');
        $this->load->view('layout/navbar');
        $this->load->view('contacto', $data);
        $this->load->view('layout/contacto/Extrafooter');
 
    }

}

/* End of file Contacto.php */
/* Location: ./application/controllers/Contacto.php */
