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
$link=conectar();
$sql="select * from tbl_habitaciones WHERE id_habitaciones BETWEEN 101 AND 110 AND reserba=0";
$res=mysqli_query($link,$sql)or die("Eror al conectarse BD");
echo"<div class='container'>";
echo"<form action='vreserva.php' method='post'>";
echo"<h3>Escoja la habitacion</h3>";
echo"<select class='form-control' id='sel1' name='h'>";
echo"<option>-----</option>";
while($row=mysqli_fetch_array($res)){
    echo"<option>".$row['id_habitaciones']."</option>";
}
echo"</select>";
echo"<h3>Escoja el tipo de alimentacion</h3>";
echo"<select class='form-control' id='sel1' name='a'>";
$sql2="select * from tbl_alimentacion";
$res2=mysqli_query($link,$sql2) or die("Error en BD");
echo"<option>-----</option>";
while($row=mysqli_fetch_array($res2)){
    echo"<option value=".$row[0].">".$row[1]."</option>";
}
echo"</select>";
echo"<h3>Escoja el tipo de pago</h3>";
echo"<select class='form-control' id='sel1' name='p'>";
$sql3="select * from tbl_pagos";
$res3=mysqli_query($link,$sql3) or die("Error en tabla pagos");
echo"<option>-----</option>";
while($row=mysqli_fetch_array($res3)){
    echo"<option value=".$row[0].">".$row[1]."</option>";
}
echo"</select>";
echo"<h3>Elija su fecha inicial</h3>";
echo"<input type='date' name='fi'>";
echo"<h3>Elija su fecha final</h3>";
echo"<input type='date' name='ff'>";
echo"<div class='clearfix'>
          <button type='submit' name='enviar' class='signupbtn'>Reservar</button>
        </div>";
echo"</form>";
echo"</div>";
?>
