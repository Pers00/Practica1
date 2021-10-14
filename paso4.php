<?php

require('../classes/autoload.php');
use aula\Util;

$usuario = Util::read('usuario');
$clave = Util::read('clave');
$claveRepetida = Util::read('claveRepetida');
$nombre = Util::read('nombre');
$apellido = Util::read('apellido');
$correo = Util::read('correo');
$interes = Util::read('interes');

echo Util::prettyVardump($_POST);

require 'escribirpaso4.php';
//include 'escribirpaso4.php';