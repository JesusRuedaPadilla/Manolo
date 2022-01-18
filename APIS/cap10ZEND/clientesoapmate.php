<?php
require_once './vendor/autoload.php';
$cliente = new Zend\Soap\Client('http://localhost/Proyectos/Manolo/APIS/cap10ZEND/servidorsoapmate.php?wsdl');
$result = $cliente->obtieneUsuarios();
// echo $result->obtieneUsuariosResult . "\n";
echo "Response:\n" . $cliente->getLastResponse() . "\n";

