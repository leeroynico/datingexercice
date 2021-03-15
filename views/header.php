<ul class="nav nav-tabs">
<?php
session_start();
if (!empty($_SESSION['users'])){
echo(
  '<li class="nav-item">
      <a class="nav-link " href="recherche.php">rechercher</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="../models/Deconnection.php">se déconnecter</a>
  </li>'
);
}
?>
<?php 
if (empty($_SESSION['users'])){
  echo(
  '<li class="nav-item">
    <a class="nav-link" href="../views/inscription.php">s\'inscire</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="../views/connection.php">se connecter</a>
  </li>'
  );
}
?>
</ul>
