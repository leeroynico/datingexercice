<?php
require_once '../views/header.php';
require_once '../models/RequetesCreate.php';
$addSportDatabase = new RequetesCreate;
$addSport = htmlspecialchars($_POST['addSport']);
$addLevel = htmlspecialchars($_POST['addLevel']);

if (!empty($addSport)) {
  $addSportDatabase->addSportDB($addSport);
  header('Location:../views/inscription.php?reg_err=succes_sport');
  die();
} else {
  header('Location:../views/inscription.php?reg_err=champs_sport_vide');
  die();
}
