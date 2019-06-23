<?php
session_start();
if(@!$_SESSION['nombre']){
    header("Location:login.php");
    echo '<script>alert("Bienvenido Usuario")</script>';
}
include('../pdf/fpdf.php');
include('./conexionbd.php');
$sesion=$_SESSION['id_usuario'];
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica','',11);
$pdf->Cell(18,10,'',0);
$pdf->Cell(150,10,'Hotel Hacienda el Descanso',0);
$pdf->Ln(25);
$pdf->SetFont('helvetica','',11);
$pdf->Cell(70,8,'',0);
$pdf->Cell(150,10,'FACTURA',0);
$pdf->Ln(35);
$pdf->SetFont('helvetica','',8);
$pdf->Cell(15,8,'Reserva',0);
$pdf->Cell(30,8,'Habitacion',0);
$pdf->Cell(25,8,'Alimentacion',0);
$pdf->Cell(30,8,'Desde',0);
$pdf->Cell(30,8,'Hasta',0);
$pdf->Cell(20,8,'Forma de Pago',0);
$pdf->Ln(8);
$link=conectar();
$sql="select * from tbl_reserva WHERE tbl_usuario_id_usuario=$sesion";
$res=mysqli_query($link,$sql) or die("Eror al conectar la BD");
while($row=mysqli_fetch_array($res)){
    $pdf->Cell(15,8,$row['id_reserva'],0);
    $pdf->Cell(30,8,$row['tbl_habitaciones_id_habitaciones'],0);
    $pdf->Cell(25,8,$row['tbl_alimentacion_id_alimentacion'],0);
    $pdf->Cell(30,8,$row['fecha_inicio'],0);
    $pdf->Cell(25,8,$row['fecha_final'],0);
    $pdf->Cell(20,8,$row['id_pagos'],0);
    $pdf->Ln(15);
}
$pdf->Output();
?>