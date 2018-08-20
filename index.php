<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>

 <?php
 if (isset($msg)){
 ?>
<div class="alerta" >
  <?php
  echo display_msg($msg); ?>
  <script src="jquery/jquery-3.3.1.min.js"></script>
  <script>
        $(document).ready(function() {
            setTimeout(function() {
              $(".alerta").fadeOut(1500);
            },1000);
        });
  </script>
<?php
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="libs/css/styles.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="libs/js/funciones.js"></script>
    <script src = "particles.min.js"></script>
  </head>
  <body id="particles-js" >
    <div class="container-fluid" id="contenedorG">
      <div class="datos col-xs-12 col-sm-12 col-md-5 col-lg-5">
        <div class="logos col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="img2">
            <img src="libs/img/fif.png" alt="">
            <img src="libs/img/uaq1.png" alt="">
          </div>
          <div class="tit">
            <h1>Universidad Autónoma de Querétaro</h1>
            <h1>Facultad de Informática</h1>
          </div>
        </div>
        <div class="inputs">
          <div class="imgInp">
            <i class="fas fa-user"></i>
            <i class="fas fa-unlock"></i>
          </div>
          <div class="in" >
              <form action="auth.php" method="POST">
                <input type="text" name="username" placeholder="Usuario">
                <input type="password" name="password" placeholder="Contraseña">
                <button type="submit" name="Login">Iniciar Sesión </button>
              </form>

          </div>
        </div>
      </div>
      <div class="imagen col-xs-12 col-sm-12 col-md-7 col-lg-7">
          <div class="txt">
            <h1>POSGRADOS</h1>
          </div>
      </div>
    </div>
  </body>
  <script>
  particlesJS.load('particles-js', 'particles.json', function() {
    console.log('callback - particles.js config loaded');});
  </script>
</html>
