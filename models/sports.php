<?php

class Sports
{
  private $nom;

  private $libelle;



  /**
   * Get the value of libelle
   */
  public function getLibelle()
  {
    return $this->libelle;
  }

  /**
   * Set the value of libelle
   *
   * @return self
   */
  public function setLibelle($libelle): self
  {
    $this->libelle = $libelle;

    return $this;
  }

  /**
   * Get the value of nom
   */
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Set the value of nom
   *
   * @return self
   */
  public function setNom($nom): self
  {
    $this->nom = $nom;

    return $this;
  }
}
