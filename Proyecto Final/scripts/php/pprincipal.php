<?php 
include('./head.php');
include('./consultabd.php');
$head=head();
print_r($head);
?>
<style>

    body {
      font-family: Arial, Helvetica, sans-serif;
      background:url("../img/hacienda.jpg") no-repeat center center fixed;
      -webkit-background-size:cover;
      -moz-background-size:cover;
      -o-background-size:cover;
      background-size:cover;
    }
</style>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hotel Hacienda El Descanso</a>
    </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Nuestra Ubicacion Es!</a></li>
          <li><a href="./login.php">Iniciar Sesion</a></li>
          <li><a href="./regis.php">Registrate</a></li>
          <li><a href="./mod.php">Modulo de pruebas</a></li>
        </ul>
  </div>
</nav>
<div id="section1" class="container-fluid">
  <h1>Ubicacacion</h1>
  <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="../img/1.png" alt="p" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="../img/2.png" alt="p2" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>
    
      <div class="item">
        <img src="../img/3.png" alt="p3" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="../img/4.png" alt="p4" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>

      <div class="item">
        <img src="../img/5.png" alt="p5" style="width:100%;">
        <div class="carousel-caption">
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
    <?php
    $datos=datoshotel();
    print_r($datos);?>
</div>
</body>