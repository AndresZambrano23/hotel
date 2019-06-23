<?php 
include('./head.php');
include('./consultabd.php');
$head=head();
print_r($head);
?>
<style>
  body {
      position: relative;
      font-family: Arial, Helvetica, sans-serif;
  }
  #section1 {padding-top:50px;height:500px;color: #fff; background-color: #1E88E5;}
  #section2 {padding-top:50px;height:500px;color: #fff; background-color: #673ab7;}
  #section3 {padding-top:50px;height:500px;color: #fff; background-color: #ff9800;}
  #section4 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
  img {
    align: center;
    width: 1300px;
    height: 250px;
  }
  tr{
    color:black;
    border: 3;
  }
  input[type=text], input[type=password] {
    width: 1150px;
    padding: 5px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    color: black;
}

input[type=text]:focus, input[type=password]:focus {
    background-color:#ddd;
    outline: none;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}


.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
  </style>
  
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hotel Hacienda El Descanso</a>
    </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#section1">Nuestra Ubicacion Es!</a></li>
          <li><a href="#section2">Iniciar Sesion</a></li>
          <li><a href="#section3">Registrate</a></li>
          <li><a href="#section4">Modulo de pruebas</a></li>
        </ul>
  </div>
</nav>
<div id="section1" class="container-fluid">
  <h1>Ubicacacion</h1>
    <?php
    $datos=datoshotel();
    print_r($datos);?>
    <img src="../img/hacienda.jpg">
</div>
<div id="section2" class="container-fluid">
  <form action="" method="post" style="border:1px solid #ccc">
    <div class="container">
      <h1>Inicia Sesion</h1>
        <hr>
        <input type="text" placeholder="Email" name="e" required>
        <input type="password" placeholder="Password" name="psw" required>
        <label>
          <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
          <button type="button" class="cancelbtn">Cancel</button>
          <button type="submit" name="enviar" class="signupbtn">Sign Up</button>
        </div>
    </div>
  </form>
</div>
<div id="section3" class="container-fluid">
<form action="" method="post" style="border:1px solid #ccc">
  <div class="container">
  <h1>Registrate en nuestra pagina</h1>
    <hr>
    <input type="text" placeholder="Name" name="n" required>
    <input type="text" placeholder="last name" name="a" required>
    <input type="text" placeholder="Email" name="e" required>
    <input type="password" placeholder="Password" name="psw" required>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" name="enviar" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</div>
<div id="section4" class="container-fluid">
    <h1>Modulo De pruebas</h1>
    <?php 
      $habitacion=consultahab();
      print_r($habitacion);
    ?>
</div>
</body>
