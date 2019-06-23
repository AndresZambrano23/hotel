<?php 
    include('./head.php');
    include('./consultabd.php');
    $head=head();
    print_r($head);
?>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="">Hotel Hacienda El Descanso</a>
    </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="./pprincipal.php">Nuestra Ubicacion Es!</a></li>
          <li><a href="./login.php">Iniciar Sesion</a></li>
          <li><a href="./regis.php">Registrate</a></li>
          <li><a href="./mod.php">Modulo de pruebas</a></li>
        </ul>
  </div>
</nav>
<div id="section3" class="container-fluid">
<form action="" method="post" style="border:1px solid #ccc">
  <div class="container">
  <h1>Modulo De pruebas</h1>
    <hr>
    <?php 
      $habitacion=consultahab();
      print_r($habitacion);
    ?>

  </div>
</form>
</div>
</body>