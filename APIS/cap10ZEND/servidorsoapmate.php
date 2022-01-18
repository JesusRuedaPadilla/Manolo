<?php
require_once './vendor/autoload.php';
require "metodo.php";
$serverUrl = "http://localhost/Proyectos/Manolo/APIS/cap10ZEND/servidorsoapmate.php";
if (isset($_GET['wsdl'])) {
    $soapAutoDiscover = new \Zend\Soap\AutoDiscover
		(new \Zend\Soap\Wsdl\ComplexTypeStrategy\ArrayOfTypeSequence());
    $soapAutoDiscover->setBindingStyle(array('style' => 'document'));
    $soapAutoDiscover->setOperationBodyStyle(array('use' => 'literal'));
    $soapAutoDiscover->setClass('metodo');
    $soapAutoDiscover->setUri($serverUrl);
    header("Content-Type: text/xml");
    echo $soapAutoDiscover->generate()->toXml();
} else {
    $soap = new \Zend\Soap\Server('http://localhost/Proyectos/Manolo/APIS/cap10ZEND/servidorsoapmate.php?wsdl');
    $soap->setObject(new \Zend\Soap\Server\DocumentLiteralWrapper(new metodo()));
    $soap->handle();	
}
