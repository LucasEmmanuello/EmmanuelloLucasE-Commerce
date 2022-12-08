<?php
$pageTitle = "Admin";

ob_start();?>

<div class="align">
    <div class="button">
        <a id="log" href="/?page=gestion&produits">Gestion des produits</a>
        <a id="log" href="/?page=admin">Existant</a>
        <a id="log" href="/?page=admin&requete">Requête</a>
    </div>
    <?php if (isset($_GET['requete'])) { ?>
        <p>Requête</p>
<?php } else{?>
        <p>Existant</p>
<?php }?>