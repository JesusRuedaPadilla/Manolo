<?php
$client = new SoapClient('http://localhost/Proyectos/Manolo/APIS/SOAPPHP/ServicioSoap/saludo.wsdl',array(
      'location' => "http://localhost/Proyectos/Manolo/APIS/SOAPPHP/ServicioSoap/soap_server.php",
      'uri'      => "http://localhost/Proyectos/Manolo/APIS/SOAPPHP/ServicioSoap/",
      'trace'    => 1
       ));
try {
	echo $return = $client->__soapCall("suma", ["a"=> 3,"b"=> 2 ] );
} catch ( SOAPFault $e ) {
	echo $e->getMessage().PHP_EOL;
}