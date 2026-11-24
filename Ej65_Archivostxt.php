<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de alumnos</title>
</head>
<body>
    <h2>Registro de alumnos</h2>
    <form method="POST">
        Nombre del alumno:
        <input type="text" name="nombre">
        <br><br>
        Edad del alumno:
        <input type="number" name="edad">
        <br><br>
        Pasatiempo del alumno:
        <input type="text" name="pasatiempo">
        <br><br>
        <button type="submit" name="guardar">Guardar</button>
        <br><br>
        <button type="submit" name="borrar">Borrar registros</button>
    </form>
    <?php    
    if (isset($_POST["guardar"])) {
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $pasatiempo = $_POST["pasatiempo"];
        file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
        file_put_contents("edades.txt", $edad . PHP_EOL, FILE_APPEND);
        file_put_contents("pasatiempos.txt", $pasatiempo . PHP_EOL, FILE_APPEND);
    }
    if (isset($_POST["borrar"])) {
        unlink("alumnos.txt");
        unlink("edades.txt");
        unlink("pasatiempos.txt");
    }
    ?>
    <h3>Lista de alumnos registrados</h3>
    <?php
    if (file_exists("alumnos.txt")) {
        $contenidoa = file_get_contents("alumnos.txt");
        $contenidoe = file_get_contents("edades.txt");
        $contenidop = file_get_contents("pasatiempos.txt");
        echo "Alumnos:<br>";
        echo nl2br($contenidoa);
        echo "Edades:<br>";
        echo nl2br($contenidoe);
        echo "Pasatiempos:<br>";
        echo nl2br($contenidop);
    }               
    else
    {echo "No existen registros.";}
    ?>
</body>
</html>
