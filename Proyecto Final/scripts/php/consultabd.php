<?php
include('./conexionbd.php');
function datoshotel(){
$link=conectar();
$sql="select * from tbl_hotel";
$res=mysqli_query($link,$sql) or die ("Error al cosultar la base de datos");
echo "<table  class='table table-dark' border=1 align=center>
    <tr><th>Direccion</th><th>Telofono</th></tr>";
      while($row=mysqli_fetch_array($res)){
        echo "<tr><td>".$row['direccion_hotel']."</td>";
        echo "<td>".$row['telefono_hotel']."</td></tr>";
    }
    echo "</table>";
    
  }

function resul(){
  
}

function consultahab(){
  $link=conectar();
  $sql="select id_piso from tbl_piso";
  $res=mysqli_query($link,$sql) or die ("Error en la conexion de la BD");
  echo "<form action='' method='post' style='border:1px solid #ccc'>
  <h3>Escoja el piso de la  habitacion</h3>";
  echo "<select  class='form-control' id='sel1' name='p'>";
  echo "<option>------</option>";
  while($row=mysqli_fetch_array($res)){
  echo "<option>".$row['id_piso']."</option>";
  }
  echo "</select>";
  echo "<input type='submit' name='enviar' value='comprobar'>" ;
  echo "</form>";
  if(isset($_POST['enviar'])){
    $p=$_REQUEST['p'];
    $sql2="select * from tbl_habitaciones where id_piso=$p";
    $res2=mysqli_query($link,$sql2) or die ("Error al consultar la base de datos habitaciones");
    echo "<form action='' method='post' style='border:1px solid #ccc'>";
    echo "<select class='form-control' id='sel1 name='h'>";
    echo "<option>------</option>";
    while($row1=mysqli_fetch_array($res2)){
    echo "<option>".$row1['id_habitaciones']."</option>";
    }
    echo "</select>";
    echo "<input type='submit' name='e' value='comprobar'>" ;
    echo "</form>";
  }
  if(isset($_POST['e'])){
    $h=$_REQUEST['h'];
    $sql3="select * from tbl_alimentacion";
    $res3=mysqli_query($link,$sql3) or die ("Error al consultar la base de datos de alimentos");
    echo "<h3>Escoja que alimentacion desea</h3>";
    echo "<form action='' method='post' style='border:1px solid #ccc'>";
    echo "<select class='form-control' id='sel1 name='h'>";
    echo "<option>------</option>";
    while($row2=mysqli_fetch_array($res3)){
    echo "<option>".$row2['descripccion']."</option>";
    }
    echo "</select>";
    echo "<input type='submit' name='v' value='Valor'>" ;
    echo "</form>";
    }
    resul($p,$h);
  }
?>