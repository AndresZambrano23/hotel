<?php 
    include('./head.php');
    include('./ingresarusr.php');
    $head=head();
    print_r($head);
?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus,  input[type=number]:focus{
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
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
    <h1>Registrate en nuestra pagina</h1>
        <hr>
        <input type="number" placeholder="cedula" name="c" required>
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
    <?php 
        if(isset($_POST['enviar'])){
            $c=$_REQUEST['c'];
            $n=$_REQUEST['n'];
            $a=$_REQUEST['a'];
            $e=$_REQUEST['e'];
            $psw=$_REQUEST['psw'];
            $h=1;
            registerusr($c,$n,$a,$e,$psw,$h);
        }
    ?>
</div>
</body>
