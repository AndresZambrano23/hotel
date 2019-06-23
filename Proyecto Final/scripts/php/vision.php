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

<div id="section1" class="container-fluid">
  <h3>Vision</h3>
   <pre> Para el año 2020 ser reconocido como un hotel lider, siendo la mejor opcion 
   para su descanso y diversión teniendo, teniendo en cuenta el desarrollo sostenible de 
   los procesos ambientales manteniendo altos estándares de calidad en la prestación del servicio.</pre>
</div>
<div id="section1" class="container-fluid">
  <h3>View</h3>
   <pre>By the year 2020, it was recognized as the leader of a hotel, being the best option 
   for rest and fun, taking into account the sustainable development of the contractor processes 
   and high quality standards in the provision of the service..</pre>
</div>
<div class="container">
  <p>Siempre pensando en nuestros clientes</p>            
  <img src="../img/v.png" class="img-rounded" alt="Cinque Terre" width="304" height="236"> 
</div>

</body>