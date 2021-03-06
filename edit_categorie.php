<?php
  $page_title = 'Editar categoría';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
?>
<?php
  //Display all catgories.
  $categorie = find_by_id('categories',(int)$_GET['id']);
  if(!$categorie){
    $session->msg("d","Missing categorie id.");
    redirect('categorie.php');
  }
?>

<?php
if(isset($_POST['edit_cat'])){
  $req_field = array('categorie-name');
  validate_fields($req_field);
  $cat_name = remove_junk($db->escape($_POST['categorie-name']));
  if(empty($errors)){
        $sql = "UPDATE categories SET name='{$cat_name}'";
       $sql .= " WHERE id='{$categorie['id']}'";
     $result = $db->query($sql);
     if($result && $db->affected_rows() === 1) {
       $session->msg("s", "Categoría actualizada con éxito.");
       redirect('categorie.php',false);
     } else {
       $session->msg("d", "Lo siento, actualización falló.");
       redirect('categorie.php',false);
     }
  } else {
    $session->msg("d", $errors);
    redirect('categorie.php',false);
  }
}
?>
<?php include_once('layouts/header.php'); ?>
<!--ERRORES O MENSAJES-->
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
              $(".alerta").fadeOut(2000);
            },1000);
        });
  </script>
<?php
  }
 ?>

</div>

<div class="panel-control" style="background: white;">

        <div class="form-grupo e-categoria">
          <p class="text-titulos">Editando <?php echo remove_junk(ucfirst($categorie['name']));?></p>
          <form method="post" action="edit_categorie.php?id=<?php echo (int)$categorie['id'];?>">
          <p class="text-subtitulos">Nuevo Nombre</p>
          <input type="text" class="input-grp" name="categorie-name" value="<?php echo remove_junk(ucfirst($categorie['name']));?>">

          <button name="edit_cat" class="btn-e-c" type="submit">
            Actualizar Categoria
          </button>
        </form>
        </div>
</div>

<?php include_once('layouts/footer.php'); ?>
