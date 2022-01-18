<?php
require 'metodosBD.php';
$server= new SoapServer('hola.wsdl');
$server->setClass('metodosBD');
$server->handle();