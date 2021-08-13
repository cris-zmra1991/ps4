<?php include_once '../templates/top_menu.php';?>
<div class="contenedor1">
<div class="vh100 ui grid">
  <div class="four wide column">
    <div class="ui fluid vertical menu">
      <div class="item">
        <div class="header">Inventarios</div>
        <div class="menu">
          <a class="item" href="../invent/invent.php" target="container">Listado de existencias</a>
        </div>
      </div>
      <div class="item">
        <div class="header">Área técnica</div>
        <div class="menu">
          <span class="item active">Producto</span>
          <a class="item">Listado de productos</a>
          <a class="item">Nuevo producto</a>
          <span class="item active">Normas de consumo</span>
          <a class="item">Norma de consumo por productos</a>
          <a class="item">Nueva norma de consumo</a>
        </div>
      </div>
      <div class="item">
        <div class="header">Producción</div>
        <div class="menu">
          <span class="item active">Órdenes de producción</span>
          <a class="item">Listar órdenes de producción</a>
          <a class="item">Nueva orden de producción</a>
          <span class="item active">Solicitud de materiales</span>
          <a class="item">Nueva solicitud de materiales</a>
          <a class="item">Devolución de materiales</a>
        </div>
      </div>
      <div class="item">
        <div class="header">Calidad</div>
        <div class="menu">
          <a class="item">E-mail Support</a>
          <a class="item">Preguntas Frequentes</a>
        </div>
      </div>
    </div>
  </div>
  <div class="twelve wide column">
    <div class="vh100 ui raised segment">
        <!-- Aqui va el iframe que contiene todas las acciones -->
        <iframe class="iframe_user_content" src="first.php" name="container" id="container"></iframe>
    </div>
  </div>
</div>
<script type="text/javascript" src="../res/js/jquery.min.js"></script>
</body>
</html>
