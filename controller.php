<?php
require_once("PompierManager.class.php");

function listePompier()
{
    $lesPompiers = new PompierManager();
    if ($pompiers = $lesPompiers->getAllPompiers())
    {
        require_once("view.php");
    }
    else
    {
        require_once("erreur.php");
    }
}