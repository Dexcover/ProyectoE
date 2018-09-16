<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Errors extends CI_Controller
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
}