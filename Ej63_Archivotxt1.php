<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar informacion</title>
</head>
<body>
    <h2>Guardar información de un archivo</h2>
    <?php
    $nombre = "Ana López";
    file_put_contents("alumnos1.txt", $nombre . PHP_EOL, FILE_APPEND);
    echo "Informacion guardada correctamente.";
    echo "<br><br>";
    ?>
    <?php
    $nombre = "Laila Cossio";
    file_put_contents("alumnos1.txt", $nombre . PHP_EOL, FILE_APPEND);
    echo "<br><br>";
    ?>
    <?php
    $contenido=file_get_contents("alumnos1.txt");
    echo nL2br($contenido);
    ?>
</body>
</body>