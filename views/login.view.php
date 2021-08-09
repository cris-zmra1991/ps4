<?php include_once '../templates/header.php';?>
<body class="grayback"><div class="fullcontainer"><div class="w-20 whiteback shadow-border">
  <form class="form p2" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <div class="loginh3 pb2">Acceso al sistema</div>
    <div>
      <label>Nombre de usuario</label>
      <input class="fluid" placeholder="Escriba su nombre de usuario" type="text" name="user">
      <br>
      <label>Contraseña</label>
      <input class="fluid" placeholder="Escriba su contraseña" type="password" name="password">
      <br>
      <label class="fluid">Compañía</label>
      <select class="ui fluid dropdown" name="company" title="Seleccione su empresa">
      <?php foreach ($comp as $valores):
      echo '<option value="'.$valores["id_conf"].'">'.$valores["company_name"].'</option>';
      endforeach; ?>
      </select>
        </div>
        <p class="psmall">Solicitar nueva cuenta de usuario <a href="#">aquí</a></p>
        <button class="button-login" type="submit">Acceder</button>
        <!-- BEGIN error box -->
        <?php echo $errores; ?>
        <!-- END error box -->
      </form>
</div></div></body></html>
