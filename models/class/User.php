<?php
require_once 'ToolDB.php';

class UserDating extends ToolDB
{
  private string $nom;
  private string $prenom;
  private string $departement;
  private string $password;
  private string $email;

  public function __construct(
    string $nom,
    string $prenom,
    string $departement,
    string $password,
    string $email
  ) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->departement = $departement;
    $this->password = $password;
    $this->email = $email;
  }


  public function addUser()
  {
    parent::requeteCreate(
      'nom,prenom,département,password,email',
      'users',
      [
        ':nom' => $this->nom,
        ':prenom' => $this->prenom,
        ':département' => $this->departement,
        ':password' => $this->password,
        ':email' => $this->email
      ]
    );
  }

  // public function addUserinDB()
  // {
  //   //parent::pdo();
  //   $insertSql = "INSERT INTO users (nom,prenom,département,password,
  //   email) 
  //     VALUES (:nom,:prenom,:département,:password,:email)";
  //   $insertrequete = $this->pdo->prepare($insertSql);
  //   $insertrequete->execute([
  //     ':nom' => $this->nom,
  //     ':prenom' => $this->prenom,
  //     ':département' => $this->departement,
  //     ':password' => $this->password,
  //     ':email' => $this->email
  //   ]);
  // }

  // public function getNom()
  // {
  //   return $this->nom;
  // }


  // public function setNom($nom): self
  // {
  //   $this->nom = $nom;
  //   return $this;
  // }


  // public function getPrenom()
  // {
  //   return $this->prenom;
  // }


  // public function setPrenom($prenom): self
  // {
  //   $this->prenom = $prenom;

  //   return $this;
  // }


  // public function getDepartement()
  // {
  //   return $this->departement;
  // }


  // public function setDepartement($departement): self
  // {
  //   $this->departement = $departement;

  //   return $this;
  // }


  // public function getPassword()
  // {
  //   return $this->password;
  // }


  // public function setPassword($password): self
  // {
  //   $this->password = $password;

  //   return $this;
  // }


  // public function getEmail()
  // {
  //   return $this->email;
  // }


  // public function setEmail($email): self
  // {
  //   $this->email = $email;

  //   return $this;
  // }
}
