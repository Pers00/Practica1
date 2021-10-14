<?php
require 'leerpaso3.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Paso 3: Alta</title>
    </head>
    <body>
        <form action="paso4.php" method="post">
            <select name="interes[]" multiple size="5">
                <option value="sagrada">Sagrada Familia</option>
                <option value="alhambra">Alhambra</option>
                <option value="mezquita">Mezquita</option>
                <option value="giralda">Giralda</option>
                <option value="alcazaba">Alcazaba</option>
                <option value="albayzin">Albayzín</option>
            </select>
            <input type="hidden" name="usuario" value="<?= $usuario ?>"/>
            <input type="hidden" name="clave" value="<?php echo $clave; ?>"/>
            <input type="hidden" name="claveRepetida" value="<?php echo $claveRepetida; ?>"/>
            <input type="hidden" name="nombre" value="<?= $nombre ?>"/>
            <input type="hidden" name="apellido" value="<?= $apellido ?>"/>
            <input type="hidden" name="correo" value="<?= $correo ?>"/>
            <input type="submit" value="send"/>
        </form>
    </body>
</html>