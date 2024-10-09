<?php
ini_set("soap.wsdl_cache_enable","0");
require_once("Departamento.php");
$options = new SoapServer(null,$options);
$server->setClass("Departamento");
$server->handle()
?>