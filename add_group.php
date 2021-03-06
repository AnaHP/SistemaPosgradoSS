<?php
  $page_title = 'Agregar grupo';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
  if(isset($_POST['add'])){

   $req_fields = array('group-name','group-level');
   validate_fields($req_fields);

   if(find_by_groupName($_POST['group-name']) === false ){
     $session->msg('d','<b>Error!</b> El nombre de grupo ya existe en la base de datos');
     redirect('add_group.php', false);
   }elseif(find_by_groupLevel($_POST['group-level']) === false) {
     $session->msg('d','<b>Error!</b> El nivel de grupo ya existe en la base de datos ');
     redirect('add_group.php', false);
   }
   if(empty($errors)){
           $name = remove_junk($db->escape($_POST['group-name']));
          $level = remove_junk($db->escape($_POST['group-level']));
         $status = remove_junk($db->escape($_POST['status']));

        $query  = "INSERT INTO user_groups (";
        $query .="group_name,group_level,group_status";
        $query .=") VALUES (";
        $query .=" '{$name}', '{$level}','{$status}'";
        $query .=")";

        if($db->query($query)){
          //sucess
          $session->msg('s',"Grupo ha sido creado! ");
          redirect('add_group.php', false);
        } else {
          //failed
          $session->msg('d','Lamentablemente no se pudo crear el grupo!');
          redirect('add_group.php', false);
        }
   } else {
     $session->msg("d", $errors);
      redirect('add_group.php',false);
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
        <div class="form-grupo">
          <p style="color: #3458C1; text-align: center; margin-left:5px; font-size: 24px;
          ">Agregar nuevo Grupo de Usuarios</p>
          <form action="add_group.php" method="post">
                <p style="margin-top: 15px; margin-left: 25px;
                color: #3458C1; font-size: 14px;">Nombre del Grupo</p>
                <input type="name" placeholder="Grupo" class="input-grp" name="group-name" required>
                <p style="margin-left: 25px;
                color: #3458C1; font-size: 14px;">Nivel del Grupo</p>
                <input type="number" placeholder="Nivel" class="input-grp" name="group-level">
                <p style="margin-left: 25px;
                color: #3458C1; font-size: 14px;">Estado</p>
                <select class="select-st" name="status">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                  </select>
                <button style="padding: 10px;
                margin-left: 25px; margin-top: 25px; background: #3458C1; color:#fff;" type="submit" name="add">
                  Agregar
                </button>
        </form>
        </div>
</div>

<?php include_once('layouts/footer.php'); ?>
