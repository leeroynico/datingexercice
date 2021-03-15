<?php 
require_once'../models/Requete.php';

$searchdpt = htmlspecialchars($_POST['searchdpt']);
$searchsport = htmlspecialchars($_POST['searchsport']);


$pdosearch = New Requetes;
$pdosearch->findSearch($searchdpt,$searchsport);

