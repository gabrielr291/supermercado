<?php
include 'conexion.php';
$query = "select * from productitos";
$resultado = mysqli_query($cone, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/estilos.css" type="text/css" rel="stylesheet">
    <title>Galeria - Supermercado La Fama</title>
</head>

<body>
    <header>
        <nav>
            <div>
                <img src="img/logo.png">
            </div>
            <ol>
                <li>
                    <a href="index.htm">Home</a>
                </li>
                <li>
                    <a href="galeria.htm">Productos</a>
                </li>
                <li>
                    <a href="formulario.htm">Ingreso Productos</a>
                </li>
                <li>
                    <a href="contactenos.htm">Contacto</a>
                </li>
                <li>
                    <a href="quienes_somos.htm">Quienes Somos</a>
                </li>
                <li>
                    <a href="ubicacion.htm">Ubicacion Y Horarios</a>
                </li>
            </ol>
        </nav>
    </header>
    <section>

        <h2>Productos En Stock</h2>
        <?php
            while ($fila = mysqli_fetch_array($resultado)) {
                echo '<div class="productos">';
                echo '<img src="' . $fila["imagenProducto"] . '"><br>';
                echo "<b>$fila[nombreProducto] </b>";
                echo "<p>$fila[descProducto] <p>";
                echo "<h3>$$fila[precioProducto] </h3>";
                echo "<button>Agregar Al Carro</button>";
                echo '</div>';
            }
            ?>
    </section>

</body>

</html>