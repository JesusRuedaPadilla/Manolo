<?php
$client = new SoapClient('http://localhost/Proyectos/Manolo/APIS/Prueba_BD/ServicioSoap/hola.wsdl',array(
      'location' => "http://localhost/Proyectos/Manolo/APIS/Prueba_BD/ServicioSoap/soap_server.php",
      'uri'      => "http://localhost/Proyectos/Manolo/APIS/Prueba_BD/ServicioSoap/",
      'trace'    => 1
       ));
try {
      $return = $client->__soapCall("obtieneUsuarios",[]);
      echo json_encode($return);
} catch ( SOAPFault $e ) {
	echo $e->getMessage().PHP_EOL;
}