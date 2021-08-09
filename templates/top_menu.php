<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Control de la Produccion</title>
  <link rel="stylesheet" href="../res/css/main.css">
  <link rel="stylesheet" href="../res/css/icon.min.css">
</head>
<body class="grayback">
    <div class="container_top_user">
    <div class="menu">
      <div class="item_logo">
      <img src="../res/img/logo.png" height="25" alt="Logo CCP">
    </div>
    <a class="item" href="first.php" target="iframe_user_content">
      <i class="home icon"></i>&nbsp;&nbsp;Inicio
    </a>
    <a class="item" href="../usermg/usermg.php" target="iframe_user_content">
      <i class="users icon"></i>&nbsp;&nbsp;Gestión de usuarios
    </a>
    <a class="item" href="#">
      <i class="boxes icon"></i>&nbsp;&nbsp;Inventarios
    </a>
    <a class="item" href="#">
      <i class="edit icon"></i>&nbsp;&nbsp;Área técnica
    </a>
    <a class="item" href="#">
      <i class="cogs icon"></i>&nbsp;&nbsp;Producción
    </a>
    <a class="item" href="#">
      <i class="clipboard check icon"></i>&nbsp;&nbsp;Calidad
    </a>

    <div class="right menu">
      <span class="menu3">
        <?php  //foreach ($user as $items) {
          //echo $items["user_name"].'&nbsp;'.$items["last_name"];
        //} ?>user &nbsp;&nbsp;
      </span>
      <a class="item" href="../conf/close.php">
        <i class="cog icon"></i>
      </a>
      <a class="item" href="../conf/close.php">
        <i class="sign-out icon"></i>
      </a>
  </div>
</div>
</div>
