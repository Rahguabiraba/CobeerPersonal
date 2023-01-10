<!-- Include de estilo -->
<style>
  <?php include __DIR__ . '/template.css'; ?>
</style>
<!-- Include de texto -->
<label>
<div id="menu">
  <div id="menu-bar" onclick="menuOnClick()">
    <div id="bar1" class="bar"></div>
    <div id="bar2" class="bar"></div>
    <div id="bar3" class="bar"></div>
  </div>
  <nav class="nav" id="nav">
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="controlAdmins.php">Control Admins</a></li>
      <li><a href="creacionArticulo.php">Creacion Articulo</a></li>
    </ul>
  </nav> 
</div>

<div class="menu-bg" id="menu-bg"></div>
</label>
<!-- Include de animación -->
<script src="components/nav/script.js"></script>