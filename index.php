<?php
include "controlador.php";


echo "<h1>El Almacén</h1>";
$vendedor = new controlador;
echo "<h3>creado objeto controlador</h3>";
$vendedor->generar_compras();
$vendedor->crea_compra("Roberto","31/7/16");
echo "<h3>Vendedor ha creado la compra</h3>";
$vendedor->mostrar_compra();
?>