<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Cotizar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('email');
    }

    public function index()
    {
        $data = null;
        $this->load->view('layout-cotizar/header');
        $this->load->view('layout-cotizar/navbar');
        $this->load->view('cotizar', $data);
        $this->load->view('layout-cotizar/Extrafooter');
    }

    public function enviarCotizacion_unused()
    {
        #fecha
        date_default_timezone_set('UTC');
        date_default_timezone_set("America/Guayaquil");

        @$Correo  = htmlspecialchars($_POST['correo']);
        @$numero  = htmlspecialchars($_POST['numero']);
        @$small   = htmlspecialchars($_POST['small']);
        @$medium  = htmlspecialchars($_POST['medium']);
        @$large   = htmlspecialchars($_POST['large']);
        @$xlarge  = htmlspecialchars($_POST['xlarge']);
        @$xxlarge = htmlspecialchars($_POST['xxlarge']);
        @$number  = htmlspecialchars($_POST['total']);

        $file = $_POST['img_front'];
        $pos  = strpos($file, ';');
        $type = explode(':', substr($file, 0, $pos))[1];
        $mime = explode('/', $type);

        $pathImage  = "public/cotizaciones/Frente-" . rand() . "." . $mime[1];
        $file       = substr($file, strpos($file, ',') + 1, strlen($file));
        $dataBase64 = base64_decode($file);
        file_put_contents($pathImage, $dataBase64);

        $file_2 = $_POST['img_back'];
        $pos2   = strpos($file_2, ';');
        $type2  = explode(':', substr($file_2, 0, $pos2))[1];
        $mime2  = explode('/', $type2);

        $pathImage2   = "public/cotizaciones/Posterior" . rand() . "." . $mime2[1];
        $file_2       = substr($file_2, strpos($file_2, ',') + 1, strlen($file_2));
        $dataBase64_2 = base64_decode($file_2);
        file_put_contents($pathImage2, $dataBase64_2);

        $url = base_url();

        $target = $url . $pathImage;
        $target .= "\n";
        $target .= $url . $pathImage2;

        $fecha = date("y:m:d:h:i:s");
        //Preparamos el mensaje de contacto
        $cabeceras = "From: $Correo\n"//La persona que envia el correo
         . "Reply-To: $Correo\n";
        $asunto    = "Bordintex Cotizacion: por responder | $fecha\n"; //asunto aparecera en la bandeja del servidor de correo
        $email_to  = "pruebas@bordintex.com"; //cambiar por tu email
        $contenido = "Han enviado un mensaje desde el sitio de cotizaciones de www.bordintex.com\n"
            . "\n"
            . "Correo: $Correo\n"
            . "Número de Telefono: $numero\n"
            . "Imagen: $target\n"
            . "small: $small\n"
            . "medium: $medium\n"
            . "large: $large\n"
            . "xlarge: $xlarge\n"
            . "xxlarge: $xxlarge\n"
            . "TOTAL: $number\n"
            . "\n";
//Enviamos el mensaje y comprobamos el resultado
        if (@mail($email_to, $asunto, $contenido, $cabeceras)) {

//Si el mensaje se envía muestra una confirmación
            $mensaje = "<div style='text-align: center'> <div class='alert alert-success' role='alert'>Su cotización ha sido enviada</div></div>";
        } else {
//Si el mensaje no se envía muestra el mensaje de error
            $mensaje = "<div style='text-align: center'> <div class='alert alert-danger' role='alert'>No se ha podido enviar su cotización, revise si ingresa la información apropiadamente. Ó utilize nuestro correo gerencia@bordintex.com</div></div>";
        }

        $data['mensaje'] = $mensaje;
        $this->load->view('layout-cotizar/header');
        $this->load->view('layout-cotizar/navbar');
        $this->load->view('cotizar', $data);
        $this->load->view('layout-cotizar/Extrafooter');
    }
    
    public function enviarCotizacionSecurity(){
        #fecha
        date_default_timezone_set('UTC');
        date_default_timezone_set("America/Guayaquil");

        @$Correo  = htmlspecialchars($_POST['correo']);
        @$numero  = htmlspecialchars($_POST['numero']);
        @$small   = htmlspecialchars($_POST['small']);
        @$medium  = htmlspecialchars($_POST['medium']);
        @$large   = htmlspecialchars($_POST['large']);
        @$xlarge  = htmlspecialchars($_POST['xlarge']);
        @$xxlarge = htmlspecialchars($_POST['xxlarge']);
        @$number  = htmlspecialchars($_POST['total']);
        
        #Seguridad de evitar campos vacios
        if(Empty($Correo) or Empty($numero)){
        $mensaje = "<div style='text-align: center'> <div class='alert alert-danger' role='alert'>No se ha podido enviar su cotización, revise si ingresa la información apropiadamente.</div></div>"; 
        $data['mensaje'] = $mensaje;
        $this->load->view('layout-cotizar/header');
        $this->load->view('layout-cotizar/navbar');
        $this->load->view('cotizar', $data);
        $this->load->view('layout-cotizar/Extrafooter');
        return false; 
        }

        $file = $_POST['img_front'];
        $pos  = strpos($file, ';');
        $type = explode(':', substr($file, 0, $pos))[1];
        $mime = explode('/', $type);

        $pathImage  = "public/cotizaciones/Frente-" . rand() . "." . $mime[1];
        $file       = substr($file, strpos($file, ',') + 1, strlen($file));
        $dataBase64 = base64_decode($file);
        file_put_contents($pathImage, $dataBase64);

        $file_2 = $_POST['img_back'];
        $pos2   = strpos($file_2, ';');
        $type2  = explode(':', substr($file_2, 0, $pos2))[1];
        $mime2  = explode('/', $type2);

        $pathImage2   = "public/cotizaciones/Posterior" . rand() . "." . $mime2[1];
        $file_2       = substr($file_2, strpos($file_2, ',') + 1, strlen($file_2));
        $dataBase64_2 = base64_decode($file_2);
        file_put_contents($pathImage2, $dataBase64_2);

        $url = base_url();
        
        $this->email->attach($url . $pathImage);
        $this->email->attach($url . $pathImage2);
        
        $this->email->from($Correo, $numero);
        $this->email->to('gerencia@bordintex.com');
        $this->email->cc('info@bordintex.com');
        $this->email->bcc('contacto@bordintex.com');
        $contenido = "Han enviado un mensaje desde el sitio de cotizaciones de www.bordintex.com\n"
            . "\n"
            . "Correo: $Correo\n"
            . "Número de Telefono: $numero\n"
            . "small: $small\n"
            . "medium: $medium\n"
            . "large: $large\n"
            . "xlarge: $xlarge\n"
            . "xxlarge: $xxlarge\n"
            . "TOTAL: $number\n"
            . "\n";
        $this->email->subject('Bordintex Cotización');
        $this->email->message($contenido);
        if (!$this->email->send()) {
        $mensaje = "<div style='text-align: center'> <div class='alert alert-danger' role='alert'>No se ha podido enviar su cotización, revise si ingresa la información apropiadamente. Ó utilize nuestro correo gerencia@bordintex.com</div></div>";
        } else {
        $mensaje = "<div style='text-align: center'> <div class='alert alert-success' role='alert'>Su cotización ha sido enviada exitosamente, revise su correo no deseado en caso de no recibir nuestro mensaje de confirmación.</div></div>";
        }
        
        
        $data['mensaje'] = $mensaje;
        $this->load->view('layout-cotizar/header');
        $this->load->view('layout-cotizar/navbar');
        $this->load->view('cotizar', $data);
        $this->load->view('layout-cotizar/Extrafooter');
        
    }
    
    
    public function base64_to_jpeg($base64_string, $output_file)
    {
        // open the output file for writing
        $ifp = fopen($output_file, '+rwb');

        // split the string on commas
        // $data[ 0 ] == "data:image/png;base64"
        // $data[ 1 ] == <actual base64 string>
        $data = explode(',', $base64_string);

        // we could add validation here with ensuring count( $data ) > 1
        fwrite($ifp, base64_decode($data[1]));

        // clean up the file resource
        fclose($ifp);

        return $output_file;
    }
    
    
    public function enviarCotizacionSecurity2(){
    
    print_r($_POST);
        
    }

}

/* End of file Cotizar.php */
/* Location: ./application/controllers/Cotizar.php */
