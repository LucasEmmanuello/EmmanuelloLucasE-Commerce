<?php
$pageTitle = "Admin";

ob_start();?>

<div class="align">
    <div class="button">
        <a id="log" href="/?page=gestion&produits">Gestion des produits</a>
        <a id="log" href="/?page=admin">Existant</a>
        <a id="log" href="/?page=admin&requete">Requête</a>
    </div>
    <?php if (isset($_GET['requete'])) { 
        $vendeurs = $db->prepare('SELECT * FROM User WHERE Utilisation = 3');

        $vendeurs -> execute();
        $vendeurs = $vendeurs->fetchAll();
        ?>
        <table class = "vu"><?php
        foreach($vendeurs as $vendeur) {
            echo '<tr>
            <td>" Nom ='.$vendeur['Nom'].'"</td>
            <td>" Email ='.$vendeur['Email'].'"</td>
            <td>" Id Card :"<img id="img" src="'.$vendeur['id_card'].'"/></td>
            </tr>';
        }
        
        ?>
    </table>
<?php }else{
    $vendeurs = $db->prepare('SELECT * FROM User WHERE Utilisation = 4');

    $vendeurs -> execute();
    $vendeurs = $vendeurs->fetchAll();?>
    <table class = "vu"><?php

    foreach($vendeurs as $vendeur) {
        echo '<tr>
        <td>" Nom ='.$vendeur['Nom'].'"</td>
        <td>" Email ='.$vendeur['Email'].'"</td>
        <td>" Id Card :"<img id="img" src="'.$vendeur['id_card'].'"/></td>
        </tr>';
    }?>
    
<?php }?>