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
      <li><a href="vision.php">Vision</a></li>
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

<div id="section1" class="container-fluid">
  <h3>Mision</h3>
   <pre> Satisfacer las necesidades de nuestros clientes y huéspedes superando 
   sus expectativas brindándoles productos y servicios de calidad en ambiente 
   de confort con el medio ambiente.</pre>
</div>
<div id="section1" class="container-fluid">
  <h3>Mission</h3>
   <pre>atisfy the needs of our customers and guests exceeding
   their expectations by providing quality products and services in the environment
   of comfort with the environment.</pre>
</div>
<div class="container">
  <p>Siempre pensando en nuestros clientes</p>            
  <img src="../img/mision.png" class="img-rounded" alt="Cinque Terre" width="304" height="236"> 
</div>

</body>