<?php

class User
{
   public $nom;
   public $prenom;
   public $mail;

   public function __construct($nom)
   {
      $this->nom = $nom;
   }

   public function getNom()
   {
      return $this->nom;
   }
   public function setNom($nom)
   {
      $this->nom = $nom;
   }
   public function getPrenom()
   {
      return $this->prenom;
   }
   public function setPrenom($prenom)
   {
      $this->prenom = $prenom;
   }
   public function getMail()
   {
      return $this->mail;
   }
   public function setMail($mail)
   {
      $this->mail = $mail;
   }
}
