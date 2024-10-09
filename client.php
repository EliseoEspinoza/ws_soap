<?php
include("funciones.inc.php");
try{
    $opciones = array(
        'location'=>'http:/localhost/ws_soap/server.php',
        'uri'=>'urn:departamento',
        'trace' => true
    );

$clien = new SoapClient(null,$opciones);
if(isset($_GET["idz"])){
    $idz = intval($_GET["idz"]);
    if($idz > 0){
        $respuestas = &$lient->obtenerDepartamentosPorZona($idz);
    }
}else{
    $respuestas = $client->obtenerDepartamentos();
}
$arreglo = array();

foreach($respuestas as $respuestas){
    $arreglo []["departamento"]=array(
        "id" => $respuesta["id"],
        "nombre" => $respuesta["departamento"]
    );
}
$arr_headers = getallheaders();
if($arr_headers["Accept"] == "applicacion/xml"){
    
}
}