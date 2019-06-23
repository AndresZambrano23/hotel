<?php
session_start();
include('./head.php');
$head=head();
print_r($head);
if(@!$_SESSION['nombre']){
    header("Location:login.php");
    echo '<script>alert("Bienvenido Usuario")</script>';
}
?>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hotel Hacienda el descanso</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="./hotel.php">Mision</a></li>
      <li><a href="./vision.php">Vision</a></li>
      <li><a href="./ventajas.php">Ventajas competitivas</a></li>
      <li><a href="./reserva.php">Reserve una habitacion</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</nav>

<div class="container">
  <p>Por favor escoge tu habitacion</p>
  <p>Dale click en las tres imagenes las cuales referencias un piso de nuestro hotel</p>
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./piso1.php" target="_blank">
          <img src="../img/p1.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>Reserva tu habitacion en el primer piso.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./piso2.php" target="_blank">
          <img src="../img/p2.jpg" alt="Nature" style="width:100%">
          <div class="caption">
            <p>Reserva tu habitacion en el segundo piso.</p>
          </div>
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="./piso3.php" target="_blank">
          <img src="../img/p3.jpg" alt="Fjords" style="width:100%">
          <div class="caption">
            <p>Reserva tu habitacion en el tercer piso.</p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
</body>