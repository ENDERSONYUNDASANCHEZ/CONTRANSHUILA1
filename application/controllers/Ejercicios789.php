<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejercicios789 extends CI_Controller {
	
	public function index()
	{
		$this->load->view('viewejercicio7');
	}

	public function arreglo($numero = NULL){
      $num1=$_POST['numero1'];
      $num2=$_POST['numero2'];
      $num3=$_POST['numero3'];
      $num4=$_POST['numero4'];
      $num5=$_POST['numero5'];
      $num6=$_POST['numero6'];
      $num7=$_POST['numero7'];
      $num8=$_POST['numero8'];

      $arreglo= array($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8);
      echo "la suma es: " . array_sum($arreglo);
   }
}

	

?>	