<?php
require_once 'ModelManager.class.php';
require_once 'Pompier.class.php';
$lesPompiersObj = [];
class PompierManager extends ModelManager 
{
 public function getAllPompiers()
 {
    $sql = "SELECT Matricule, NomPompier, PrenomPompier, TelPompier, SexePompier
            FROM Pompier
            ORDER BY NomPompier;";
    $pompiers = $this->executerRequete($sql);
    foreach( $pompiers as $pompier)
    {
      $lesPompiersObj[] = new Pompier($pompier);
    }
    return $lesPompiersObj;
  }
  
}