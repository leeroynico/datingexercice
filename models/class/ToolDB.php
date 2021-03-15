<?php

class ToolDB
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

  public function requeteSelect($colonne, $table, $condition): array
  {
    $this->pdo();
    $selectRequete = $this->pdo->prepare("SELECT :colonne FROM :table 
    WHERE :condition");
    $selectRequete->execute([
      ":colonne" => $colonne,
      ":table" => $table,
      ":condition" => $condition
    ]);
    $results = $selectRequete->fetch();
    return $results;
  }
  public function requeteCreate($colonne, $table, $valuesToAdd)
  {
    $this->pdo();
    $createRequete = $this->pdo->prepare("INSERT INTO :table(:colonne) VALUES (:value)");
    $createRequete->execute($valuesToAdd);
  }
}
