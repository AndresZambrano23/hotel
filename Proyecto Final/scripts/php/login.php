<?php 
    include('./head.php');
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
    
    h1{
        color:black;
    }
    input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    background: #f1f1f1;
    color: black;
    box-sizing: border-box;
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
    }

    button:hover {
    opacity:1;
    }

    .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
    }

    .imgcontainer{
        text-align: center;
        margin: 24px 0 12px 0;
    }

    img.avatar{
        width:10%;
        border-radius:50%;
    }

    .container {
    padding: 16px;
    }

    span.psq{
        display: block;
        float: none;
    }
</style>
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

<div id="section2" class="container-fluid">
  <form action="validarusr.php" method="post" style="border:1px solid #ccc">
    <div class="imgcontainer">
        <img src="../img/avatar.png" alt="Avatar" class="Avatar">
    </div>
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
</body>