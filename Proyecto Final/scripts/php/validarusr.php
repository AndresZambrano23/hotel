<?php
    session_start();
    include('./conexionbd.php');
    include('./head.php');
    $head=head();
    print_r($head);
    $link=conectar();
    $e=$_REQUEST['e'];
    $p=$_REQUEST['psw'];
    $sql="select * from tbl_usuario where correo_electronico ='$e'";
    $res=mysqli_query($link,$sql) or die ("Error al consultar la base de datos");

    if($row=mysqli_fetch_array($res)){
       if($p==$row['contraseña']){
            $_SESSION['id_usuario']=$row['id_usuario'];
            $_SESSION['nombre']=$row['nombre'];
            //header("Location: hotel.php");
            echo"<script>location.href='hotel.php'</script>";
            echo'<script>alert("Se redirecciono")</script>';
       }else{
           echo'<script>alert("Su contraseña es incorrecta")</script>';
           echo"<script>location.href='login.php'</script>";

       }
    }else{
        echo'<script>alert("El usuario no existe")</script>';
        echo"<script>location.href='login.php'</script>";
    }
?>

