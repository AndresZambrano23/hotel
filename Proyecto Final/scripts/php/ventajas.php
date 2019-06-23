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
  <h3>Ventajas Competitivas</h3>
   <pre>Nuestras ventajas competitivas son:</pre>
   <ol>
        <li>Se tiene una página web para realizar reservas en línea.</li>
        <li>La web cuenta con módulo de simulación de reservas y costos sin comprometer al usuario.</li>
        <li>Contamos con servicio de pagos online que garantizan la reserva inmediata.</li>
        <li>Aseguramos que lo visto en la página es lo que usted encontrará en el hotel.</li>
        <li>Nuestra interfaz gráfica es amigable con el usuario de fácil entender.</li>
   </ol>
</div>
<div id="section1" class="container-fluid">
  <h3>Competitive advantages</h3>
   <pre>Our competitive advantages are:</pre>
   <ol>
        <li>You have a web page to make reservations online.</li>
        <li>The website has a simulation module for reservations and costs without compromising the user.</li>
        <li>We have online payment service that guarantees immediate booking.</li>
        <li>We assure that what is seen on the page is what you will find at the hotel.</li>
        <li>Our graphical user interface is easy to understand.</li>
   </ol>
</div>
<div class="container">
  <p>Siempre pensando en nuestros clientes</p>            
  <img src="../img/ventajas.png" class="img-rounded" alt="Cinque Terre" width="304" height="236"> 
</div>

</body>