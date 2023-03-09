<?php
require_once("Pompier.php");

function listePompier()
{
    $pompier = new Pompier();
    if ($pompiers = $pompier->getAllPompiers()){
        require_once("view.php");
    }
    else{
        require_once("erreur.php");
    }
}