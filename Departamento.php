<?php
require_once("conn.php");

class Departamento{
    public $last;
    public function obtenerDepartamentos(){
        $db = new DB('mysql:host=localhost;dbname=catalogos;charset=utf8mb4',"root","admin")
        $sql = 'SELECT
d.id_departamentos as id,
d.nombres_departamentos as departamento,
z.id_zona,
z.nombre_zona
FROM
departementos d
INNER JOIN zona z on d.id_zona=z.id_zona;';
$data = $db->run($sql)->fetchAll()
return $data     
}


public function obtenerDepartamentosPorZona($idzona){
    $db = new DB('mysql:host=localhost;dbname=catalogos;charset=utf8mb4',"root","admin")
    $sql = 'SELECT
d.id_departamentos as id,
d.nombres_departamentos as departamento,
z.id_zona,
z.nombre_zona
FROM
departementos d
INNER JOIN zona z on d.id_zona=z.id_zona
WHERE
  d.id_zona=;';
$data = $db->run($sql)->fetchAll()
return $data
}


public function obtenerDepartamentosPorZona($iddepto){
    $db = new DB('mysql:host=localhost;dbname=catalogos;charset=utf8mb4',"root","admin")
    $sql = 'SELECT
d.id_departamentos as id,
d.nombres_departamentos as departamento,
z.id_zona,
z.nombre_zona
FROM
departementos d
INNER JOIN zona z on d.id_zona=z.id_zona
WHERE
  d.id_departamento=.$iddepto.;';
$data = $db->run($sql)->fetchAll()
return $data

}
}
?>