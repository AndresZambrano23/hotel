<?php 
function conectar(){
    $host='localhost'; //El nombre del servidor de mysql
    $user='root'; //usuario de mysql
    $pass=''; //password de mysql
    $db_name='hotel_descanso'; //nombre de la BD
    //Conectarnos a mysql
    $link=mysqli_connect($host,$user,$pass) or die("error al conectarse a mysql");
    //Seleccionar la base de datos BD
    mysqli_select_db($link,$db_name) or die ("Error al seleccionar la BD");
    return $link;
}
?>