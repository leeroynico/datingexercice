<?php
require_once '../models/class/User.php';

foreach ($_POST as $key => $values) {
  if (!empty($values)) {
    $values = htmlspecialchars($values);
  } else {
    header('Location:../views/inscription.php?reg_err=champs_vides');
  }
}

$nomUser =  $_POST['nom'];
$prenomUser = $_POST['prenom'];
$emailUser = $_POST['email'];
$departementUser = $_POST['departement'];
$passwordUser = $_POST['password'];
$paswordConfirm = $_POST['pasword-confirm'];

$newUser = new UserDating(
  $nomUser,
  $prenomUser,
  $departementUser,
  $passwordUser,
  $emailUser
);
$newUser->addUser();
var_dump($newUser);
