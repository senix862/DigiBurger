<?php
require_once('funciones/autoload.php');
$datos = [
    'team' => '',
    'commission' => '',
    'search' => ''
];
$usuarios = peticionCurl('http://apiusers.juancarlosdh.dhalumnos.com/api/users', 'GET', $datos);
var_dump($usuarios);
 ?>
