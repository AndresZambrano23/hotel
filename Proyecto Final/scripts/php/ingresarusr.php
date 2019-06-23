<?php  

function registerusr($id,$n,$a,$c,$p,$h){
    include('./conexionbd.php');
    $link=conectar();
    $sql="INSERT INTO tbl_usuario(id_usuario,nombre,apellido,correo_electronico,contraseña,tbl_hotel_id_hotel) values($id,'$n','$a','$c','$p',$h)";
    $res=mysqli_query($link,$sql)or die ("Eror al insertar datos");
    print_r("Se ingresaron los datos correctamente"); 
    //()
}

?>