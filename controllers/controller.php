<?php
require_once("models/PompierManager.class.php");

function listePompier()
{
    $lesPompiers = new PompierManager();
    if ($pompiers = $lesPompiers->getAllPompiers())
    {
        require_once("views/view.php");
    }
    else
    {
        require_once("views/erreur.php");
    }
}