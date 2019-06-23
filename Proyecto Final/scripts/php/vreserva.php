<?php
session_start();
include('./head.php');
include('./conexionbd.php');
$head=head();
print_r($head);
if(@!$_SESSION['nombre']){
    header("Location:login.php");
    echo '<script>alert("Bienvenido Usuario")</script>';
}
$sesion=$_SESSION['id_usuario'];
$h=$_REQUEST['h'];
$a=$_REQUEST['a'];
$p=$_REQUEST['p'];
$fi=$_POST['fi'];
$ff=$_POST['ff'];
$link=conectar();
$sql="INSERT INTO tbl_reserva(tbl_usuario_id_usuario,tbl_habitaciones_id_habitaciones,tbl_alimentacion_id_alimentacion,fecha_inicio,fecha_final,id_pagos) VALUES ($sesion,$h,$a,'$fi','$ff',$p)";
$res=mysqli_query($link,$sql) or die("Los datos no fueron ingresados");
$sql2="UPDATE tbl_habitaciones set reserba=1 WHERE id_habitaciones='$h'";
$res=mysqli_query($link,$sql2) or die("Eror al actualizar los datos");
/*$sql3="select * from tbl_reserva WHERE id_habitaciones='$h'";
$res=mysqli_query($link,$sql3) or die("Erorr al mostras datos ");*/
?>
<div class="container">
    <div class="alert alert-success alert-dismissible fade in">
        <a href="./pdf.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Felicidades!</strong> Has reservado tu habitacion ahora imprime tu recibo.
    </div>
<div>