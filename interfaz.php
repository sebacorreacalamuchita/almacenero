<?php
include 'compra.php';
/*require_once 'cliente.php';
require_once 'DDBB.php';
require_once 'catalogo.php';
require_once 'libreta.php';
*/
class interfaz
{
	public $var = "lo que quiero mostrar";

  public function crear_libreta() {
  } // end of member function crear_libreta

  /**
   * Muestra "Hola mundo!"
   *
   * @return void
   * @access public
   */
  public function presenta() {
  	return 'Desde la clase interfaz';
  } // end of member function presenta


  private function crea_compra() {
  		$compranueva = new compra; 
  } // end of member function crea_compra

  private function invitar_cena() {
  } // end of member function invitar_cena



} // end of interfaz
?>
