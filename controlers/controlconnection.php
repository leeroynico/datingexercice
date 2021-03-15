<?php
require_once '../models/Requete.php';

//récupération infos users
$emailUser = htmlspecialchars($_POST['email']);
$passwordUser = htmlspecialchars($_POST['password']);

//nouvelles requetes pour vérification
$checkUserConnexion = new Requetes;
$passwordb = $checkUserConnexion->findPassword($emailUser);

if (
  password_verify($passwordUser, $passwordb) &&
  $checkUserConnexion->checkEmailExist($emailUser)
) {
  session_start();
  $_SESSION['users'] = $emailUser;
  header('Location:../views/index.php');
} else {
  header('Location:../views/connection.php?reg_err=connection');
}
