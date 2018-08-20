<?php
  $page_title = 'Página de Inicio del Administrador';
  require_once('includes/load.php');
  //Se verifica que el usuario sea administrador
   page_require_level(1);
?>
<?php
 $c_categorie     = count_by_id('categories');
 $c_product       = count_by_id('products');
 $c_sale          = count_by_id('sales');
 $c_user          = count_by_id('users');
 $products_sold   = find_higest_saleing_product('10');
 $recent_products = find_recent_product_added('5');
 $recent_sales    = find_recent_sale_added('5')
?>
<?php include_once('layouts/header.php'); ?>


      <div class="panel-control">
        <article class="full-width tile">
        <div class="tile-text" >
          <span class="text-condensedLight" style="color: #2591A3;">
            <?php  echo $c_user['total']; ?><br>
            <small>MarioBros</small>
          </span>
          <div class="overlay-p">
              <div class="text-p">Ver más...</div>
          </div>
        </div>
        <div class="tile-icon bg-success">
            <a href="Generacion2012MCC2014.php"><i class="fas fa-users tile-icon-int"></i></a>
        </div>
      </article>


        <article class="full-width tile">
        <div class="tile-text">
          <span class="text-condensedLight" style="color: #2591A3;">
            <?php  echo $c_user['total']; ?><br>
            <small>Generación 2015-2017</small>
          </span>
          <div class="overlay-p">
              <div class="text-p">Ver más...</div>
          </div>
        </div>
        <div class="tile-icon bg-success">
            <i class="fas fa-users tile-icon-int"></i>
        </div>
      </article>


        <article class="full-width tile">
        <div class="tile-text">
          <span class="text-condensedLight" style="color: #2591A3;">
            <?php  echo $c_user['total']; ?><br>
            <small>Generación 2016-2018</small>
          </span>
          <div class="overlay-p">
              <div class="text-p">Ver más...</div>
          </div>
        </div>
        <div class="tile-icon bg-success">
            <i class="fas fa-users tile-icon-int"></i>
        </div>
      </article>


        <article class="full-width tile">
        <div class="tile-text">
          <span class="text-condensedLight" style="color: #2591A3;">
            <?php  echo $c_user['total']; ?><br>
            <small>Generación 2017-2019</small>
          </span>
          <div class="overlay-p">
              <div class="text-p">Ver más...</div>
          </div>
        </div>
        <div class="tile-icon bg-success">
            <a href="Generacion2012MCC2014.php"><i class="fas fa-users tile-icon-int"></i></a>
        </div>
      </article>



        <article class="full-width tile">
        <div class="tile-text">
          <span class="text-condensedLight" style="color: #2591A3;">
            <?php  echo $c_user['total']; ?><br>
            <small>Generación 2018-2020</small>
          </span>
          <div class="overlay-p">
              <div class="text-p">Ver más...</div>
          </div>
        </div>
        <div class="tile-icon bg-success">
            <i class="fas fa-users tile-icon-int"></i>
        </div>
      </article>

    </div>




<?php include_once('layouts/footer.php'); ?>