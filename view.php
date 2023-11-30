<?php
$titre ="Liste des Pompiers";
ob_start();
?>
<table class="table table-striped">
    <tbody>
        <thead>
        <tr>
            <th scope="col">Nom du Pompier</th>
            <th scope="col">Prénom du Pompier</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Sexe</th>
        </tr>
        </thead>
        <?php        
            foreach ($pompiers as $unPompier){
        ?>
            <tr>
             <td><?= $unPompier->getNomPompier() ?></td> 
             <td><?= $unPompier->getPrenomPompier() ?></td>
             <td><?= $unPompier->getTelPompier()?></td> 
             <td><?= $unPompier->getSexePompier() ?></td>  
            </tr>
        <?php
        }
    ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
require "gabarit.php";