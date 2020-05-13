<?php
include 'conexion.php';

$titulo = $_POST["txtTitulo"];
$descrip = $_POST["txtDescripcion"];
$precio = $_POST["txtPrecio"];
$nomnreimg = $_FILES['imagen']['name'];//nombre archivo
$archivo=$_FILES['imagen']['tmp_name'];//contiene archivo
$ruta="fotos";

$ruta=$ruta."/".$nomnreimg;
move_uploaded_file($archivo,$ruta);

$sql="insert into productitos values(null,'$titulo','','$precio','','$descrip','$ruta')";

$reg=mysqli_query($cone,$sql);
echo $sql;

$cantidad=mysqli_affected_rows($cone);//entrega el numero de filas afectadas
if ($cantidad>0) {
    echo 'formulario enviado correctamente';
}else{
    echo 'No grabo';
}
?>