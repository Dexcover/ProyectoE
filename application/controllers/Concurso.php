<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Concurso extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mconcurso');
        $this->load->library('session');
    }

    public function index()
    {

        $this->load->view('layout/concurso/header');
        $this->load->view('layout/navbar');
        $this->load->view('concurso/index');
        $this->load->view('layout/concurso/footer');
        $this->output->cache(TIEMPO_CACHE);
    }

    public function concursar()
    {

        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $add  = $_POST['add'];
        $telf = $_POST['telf'];

        $pass = $this->mconcurso->guardaConcursante($name, $mail, $add, $telf);

        if ($pass) {
            $html = "<div style='text-align: center'> <div class='alert alert-danger' role='alert'>Ya esta registrado el número de telefono para concursar</div></div>";
        } else {
            $html = "<div style='text-align: center'> <div class='alert alert-success' role='alert'>Ya estas participando, gracias por Concursar</div><div class='divider'></div><h5>Te llamaremos ó Enviaremos a tu correo si saliste ganador, si no pudiste ver la transmisión en vivo</h5></div>";
        }

        $data['mensaje'] = $html;
        $this->load->view('layout/concurso/header');
        $this->load->view('layout/navbar');
        $this->load->view('concurso/index', $data);
        $this->load->view('layout/concurso/footer');

    }

}

/* End of file Concurso.php */
/* Location: ./application/controllers/Concurso.php */
