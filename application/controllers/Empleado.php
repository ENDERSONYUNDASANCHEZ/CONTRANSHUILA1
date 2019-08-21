<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class empleado extends CI_Controller {
	
	public function index()
	{
		$this->load->view('viewEmpleado');
	}

	public function suma($numero = NULL){
		$num=$_POST['Numero'];
      $num1=$_POST['Numero1'];
      $nume=$num+$num1;
      echo ($nume);
	}
}
?>	