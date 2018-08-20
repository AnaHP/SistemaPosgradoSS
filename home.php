<?php
  $page_title = 'Inicio';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>

      <div class="contenido">
         <h1>Bienvenido al Sistema de Posgrado</h1>
         <img src="libs/img/informatica.png" width="120px" alt="informatica">
         <img src="libs/img/uaq.png" width="115px" alt="uaq">

      </div>

<?php include_once('layouts/footer.php'); ?>
