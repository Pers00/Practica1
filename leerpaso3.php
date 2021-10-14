<?php

require('../classes/autoload.php');
use aula\Util;

$usuario = Util::read('usuario');
$clave = Util::read('clave');
$claveRepetida = Util::read('claveRepetida');
$nombre = Util::read('nombre');
$apellido = Util::read('apellido');
$correo = Util::read('correo');