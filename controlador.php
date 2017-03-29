<?php
include 'compra.php';
/*require_once 'cliente.php';
require_once 'DDBB.php';
require_once 'catalogo.php';
require_once 'libreta.php';
*/
class controlador
{
	var $lista_compras;
	public function crea_compra($cliente_compra,$fecha_compra) {
  		$compranueva = new compra;
  		$compranueva->cliente = $cliente_compra;
  		$compranueva->fecha = $fecha_compra;
  		$this->lista_compras[] = $compranueva;
  } // end of member function crea_compra

	public function generar_compras () {
		$comprajose = new compra;
		$comprajose->cliente = "José";
		$comprajose->fecha = "3/5/16";
		$this->lista_compras[] = $comprajose;
		$comprajuan = new compra;
		$comprajuan->cliente = "Juan";
		$comprajuan->fecha = "31/1/16";
		$this->lista_compras[] = $comprajuan;
		$compramaria = new compra;
		$compramaria->cliente = "María";
		$compramaria->fecha = "13/4/16";
		$this->lista_compras[] = $compramaria;
	}	

	public function mostrar_compra() {
		print_r($this->lista_compras, $return = null);
	}		
} // end of controlador
?>
