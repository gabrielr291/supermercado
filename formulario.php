<?php
include 'conexion.php';
$Nombre=$_POST["txtNombre"];
$Apellido=$_POST["txtApellido"];
$Email=$_POST["txtMail"];
$Rut=$_POST["txtRut"];
$Telefono=$_POST["txtTelefono"];
$Mensaje=$_POST["txtMensaje"];



$sql="insert into formulario values('$Nombre','$Apellido','$Email','$Rut','$Telefono','$Mensaje');";
 
$reg=mysqli_query($cone,$sql);
$cantidad=mysqli_affected_rows($cone);//entrega el numero de filas afectadas
if ($cantidad>0) {
    echo 'formulario enviado correctamente';
}else{
    echo 'No grabo';
}
?>