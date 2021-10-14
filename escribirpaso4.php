<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Paso 4: Alta</title>
    </head>
    <body>
        Data:<br>
        <ul>
        <?php
        
        echo '<li>' . $usuario . '</li>';
        echo '<li>' . $clave . '</li>';
        echo '<li>' . $claveRepetida . '</li>';
        echo '<li>' . $nombre . '</li>';
        echo '<li>' . $apellido . '</li>';
        echo '<li>' . $correo . '</li>';
        foreach($interes as $valor) {
            echo '<li>' . $valor . '</li>';
        }
        ?>
        </ul>
    </body>
</html>