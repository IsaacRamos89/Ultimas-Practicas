<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Arreglos de una tienda</title>
</head>
<body>
    <h2>JUGUETERIA</h2>
    <form method="POST" action="">
        <?php
        echo "<br> <h3>LISTA DE PRODUCTOS DISPONIBLES</h3>";
        echo "<br> Llavero de tung tung sahur $67";
        echo "<br> Figura de accion $300";
        echo "<br> Pista HotWheels $1200";
        echo "<br> Peluche $150";
        for ($i = 0; $i < 3; $i++) {
            echo "<br>Producto:";
            echo "<input type='text' name='n1[]'>" . " ";
            echo "Cantidad:";
            echo "<input type='number' name='n2[]' min='1'>" . " ";
            echo "<br><br>";
        }
        ?>
        <button type="submit" name="guardar" value="guardar">
            Total a pagar
        </button>
        <?php
        if (isset($_POST['guardar'])) {
            $pro = $_POST['n1'];
            $can = $_POST['n2'];
            $validar = true;
            for ($i = 0; $i < 3; $i++) {
                if ($pro[$i] != "Llavero de tung tung sahur" and
                    $pro[$i] != "Figura de accion" and
                    $pro[$i] != "Pista HotWheels" and
                    $pro[$i] != "Peluche") {
                    $validar = false;
                }
            }
            if ($validar == true) {
                $total = array();
                $resta = array();
                $multi = array();
                $divi = array();
                for ($i = 0; $i < 3; $i++) {
                    if ($pro[$i] == "Llavero de tung tung sahur") {
                        $total[$i] = 67;
                    }
                    if ($pro[$i] == "Figura de accion") {
                        $total[$i] = 300;
                    }
                    if ($pro[$i] == "Pista HotWheels") {
                        $total[$i] = 1200;
                    }
                    if ($pro[$i] == "Peluche") {
                        $total[$i] = 150;
                    }
                    $multi[$i] = $total[$i] * $can[$i];
                    $resta[$i] = $multi[$i] - 0;
                    $divi[$i] = $resta[$i] / 1;
                }
                $suma = 0;
                echo "<h3>LISTA DE COMPRA</h3>";
                for ($i = 0; $i < 3; $i++) {
                    echo "Producto: " . $pro[$i];
                    echo "<br>Precio: $" . $total[$i];
                    echo "<br>Cantidad: " . $can[$i];
                    echo "<br>Subtotal: $" . $multi[$i];
                    echo "<br><br>";

                    $suma = $suma + $multi[$i];
                }
                echo "<h2>TOTAL A PAGAR: $" . $suma . "</h2>";
            }
            else {
                echo "<h3>ERROR; Uno de los productos colocados no esta en existencia.</h3>";
            }
        }
        ?>
    </form>
</body>
</html>
