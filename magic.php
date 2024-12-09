<?php 

require_once("client.php");

$cliente1 = new Client('Laura', 'MiCumpleaños');
echo $cliente1->__toString();

?>