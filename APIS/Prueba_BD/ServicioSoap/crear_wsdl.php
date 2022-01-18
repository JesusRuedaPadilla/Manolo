<?php
require_once './vendor/autoload.php';
include 'metodosBD.php';
$class = "metodosBD";
$serviceURI = "http://localhost/Prueba_BD/ServicioSoap/";
$wsdlGenerator = new \PHP2WSDL\PHPClass2WSDL($class, $serviceURI);
// Generate the WSDL from the class adding only the public methods that have @soap annotation.
$wsdlGenerator->generateWSDL(true);
// Dump as string
$wsdlXML = $wsdlGenerator->dump();
// Or save as file
$wsdlXML = $wsdlGenerator->save('hola.wsdl');