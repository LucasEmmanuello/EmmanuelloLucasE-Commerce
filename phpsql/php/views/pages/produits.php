<?php
$pageTitle = "Produits";

ob_start();


$produit = $db->prepare('SELECT * FROM Produits WHERE id_produit = "'.$_GET['id'].'"');

$produit -> execute();
$produit = $produit->fetchAll();

foreach($produit as $info) {
    echo '<tr><td><img id="img" src="'.$info['Url_img'].'"/></a></td>
    <td><div class="achat"><form method="post"><p><input id="submit" type="submit" value="🛒"></form></p><p> Prix : '.$info['Prix'].'</p><p> Stock : '.$info['Stock'].'</p>
    <p> Note : '.$info['Note'].' /5</p></div></td></tr>';
}
if(isset($_GET['gestion'])){
    echo 'choose your titan';
}
?>
