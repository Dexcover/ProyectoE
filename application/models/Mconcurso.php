<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mconcurso extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}


	public function guardaConcursante($name, $mail, $add, $telf){
		$this->db->where('telefono', $telf);
		$query=$this->db->get('CONCURSO');
		$pass=false;
		foreach ($query->result() as $row) {
			$pass=true;
		}

		if($pass){
			return true;
		}else{
			$data= array('nombre' => $name,
		'email' =>$mail,
		'direccion'=> $add,
		'telefono'=>$telf
		 );

		$this->db->insert('CONCURSO', $data);

		return $pass;
		}

	}


}

/* End of file Mconcurso.php */
/* Location: ./application/models/Mconcurso.php */