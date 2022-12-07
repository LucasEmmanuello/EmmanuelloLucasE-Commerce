<?php
$pageTitle = "Home";

ob_start();

$produits = $db->prepare('SELECT * FROM Produits');

$produits -> execute();
$produits = $produits->fetchAll();

$catégories = $db->prepare('SELECT * FROM Catégorie');

$catégories -> execute();
$catégories = $catégories->fetchAll();

?>

<table>
    <?php
    if($catégories[0][0] == '1'){
        foreach($produits as $produit) {
            echo '<tr><td><a href="/?page=product_page&id='.$produit['Id_produit'].'"><img id="img" src="'.$produit['Url_img'].'"/></a></td></tr>';
        }
    }
    ?>
</table>


<?php
$pageContent = ob_get_clean();
