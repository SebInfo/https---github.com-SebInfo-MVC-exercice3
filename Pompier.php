<?php
require_once 'Model.php';
class Pompier extends Model {
 public function getAllPompiers(){
    $sql = "SELECT Matricule, NomPompier, PrenomPompier, TelPompier, SexePompier
            FROM Pompier
            ORDER BY NomPompier;";
    $pompiers = $this->executerRequete($sql);
    return $pompiers;
  }
}