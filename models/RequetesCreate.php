<?php

class RequetesCreate
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

  public function createUsers(
    string $nom,
    string $prenom,
    int $departement,
    string $password,
    string $email,
    int $sport,
    int $niveau
  ) {
    $this->pdo();
    $insertSql = "INSERT INTO users (nom,prenom,département,password,
    email,code_sport,code_niveau) 
      VALUES (:nom,:prenom,:département,:password,:email,:sport,:niveau)";
    $insertrequete = $this->pdo->prepare($insertSql);
    $insertrequete->execute([
      ':nom' => $nom,
      ':prenom' => $prenom,
      ':département' => $departement,
      ':password' => $password,
      ':email' => $email,
      ':sport' => $sport,
      ':niveau' => $niveau
    ]);
  }

  public function addSportDB(string $newsport)
  {
    $this->pdo();
    $Requete = "INSERT INTO sports(sport) VALUES (?)";
    $createrequete = $this->pdo->prepare($Requete);
    $createrequete->execute([$newsport]);
  }
}
