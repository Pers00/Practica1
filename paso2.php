<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require('../classes/autoload.php');
use aula\Util;

$usuario = Util::read('usuario');
$clave = Util::read('clave');
$claveRepetida = Util::read('claveRepetida');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Paso 2: Alta</title>
    </head>
    <body>
        <form action="paso3.php" method="post">
            <input type="text" name="nombre"/>
            <input type="text" name="apellido"/>
            <input type="email" name="correo"/>
            <input type="hidden" name="usuario" value="<?= $usuario ?>"/>
            <input type="hidden" name="clave" value="<?php echo $clave; ?>"/>
            <input type="hidden" name="claveRepetida" value="<?php echo $claveRepetida; ?>"/>
            <input type="submit" value="next"/>
        </form>
    </body>
</html>