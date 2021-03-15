<?php
class Requetes
{
  private $dbName =  '../DB/madatabase.db';
  private $dsn = "sqlite:";
  private $pdo;

  public function pdo(): void
  {
    try {
      $this->pdo = new PDO($this->dsn . $this->dbName);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die($e->getMessage());
    }
  }
  public function checkEmailExist(string $mailToCheck): bool
  {
    $this->pdo();
    $selectRequete = $this->pdo->prepare("SELECT email FROM users 
    WHERE email=?");
    $selectRequete->execute([$mailToCheck]);
    $check = $selectRequete->fetch();
    if ($check) {
      return true;
    } else {
      return false;
    }
  }
  public function findPassword(string $userstockeck)
  {
    $this->pdo();
    $selectRequete = $this->pdo->prepare("SELECT password FROM users 
    WHERE email=?");
    $selectRequete->execute([$userstockeck]);
    $check = $selectRequete->fetch();
    return $check[0];
  }
  public function getAllSport()
  {
    $this->pdo();
    $selectSport = $this->pdo->query("SELECT sport,ID FROM sports 
    ORDER BY sport ASC");
    while ($otionSport = $selectSport->fetch()) {
      $array[] = $otionSport[0];
    }
    $array = array_unique($array); // évite les doublons 
    sort($array);
    $count = count($array);
    for ($i = 0; $i < $count; $i++) {
      echo ("<option value=" . $array[$i] . ">" . $array[$i] . "</option>");
    }
  }
  public function getAllDepartement(): void
  {
    $this->pdo();
    $selectdpt = $this->pdo->query("SELECT nomdpt,ID FROM dpt 
    ORDER BY nomdpt ASC");
    while ($optiondpt = $selectdpt->fetch()) {
      echo ("<option value=" . $optiondpt['ID'] . ">" . $optiondpt['nomdpt'] . "</option>");
    }
  }
  public function getAllLevel()
  {
    // $this->pdo();
    // $selectlevel = $this->pdo->query("SELECT DISTINCT libelle,ID FROM niveau 
    // ORDER BY ID ASC");
    // while ($optionlevel = $selectlevel->fetch()) {
    //   echo ("<option value=" . $optionlevel['ID'] . ">" . $optionlevel['libelle'] . "</option>");
    // }
    $this->pdo();
    $selectlevel = $this->pdo->query("SELECT DISTINCT libelle FROM niveau 
    ORDER BY libelle ASC");
    while ($optionlevel = $selectlevel->fetch()) {
      echo ("<option value=" . $optionlevel['libelle'] . ">" . $optionlevel['libelle'] . "</option>");
    }
  }

  public function findSearch($dpt, $sp)
  {
    $this->pdo();
    $search = $this->pdo->prepare("SELECT nom,prenom FROM users 
    WHERE département=? AND code_sport=?");
    $search->execute([$dpt, $sp]);
    while ($results = $search->fetch()) {
      echo ("<p>" . $results['nom'] . $results['prenom'] . "</p>");
    }
  }
}
