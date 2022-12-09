<?php
$pageTitle = "Home";

ob_start();

if(isset($_GET['connected'])){
    $id = $db->prepare('SELECT Utilisation FROM User');
    $id->execute();
}

if(isset($_POST)){
    if(isset($_GET['connected'])){
        //$ajout = $db->prepare('INSERT INTO Panier(id_article) VALUES (:id_article)');
        //$ajout->execute(["id_article" => $_POST]);
    }
}

$catégories = $db->prepare('SELECT * FROM Catégorie');

$catégories -> execute();
$catégories = $catégories->fetchAll();

if(isset($_POST['search'])){
    $srch_produit = $db->prepare('SELECT * FROM Produits WHERE Nom ="'.$_POST['search'].'"');

    $srch_produit->execute();
    $srch_produit = $srch_produit->fetchAll();

    ?>
    <div id = "retour">
        <a href="/?page=home">Retour</a>
    </div>
    <table class = "vu"><?php
    foreach ($srch_produit as $detail) {
        $id_article = $detail['Id_produit'];
        echo '<tr><td><a href="/?page=produits&id=' . $id_article . '"><img id="img" src="' . $detail['Url_img'] . '"/></a></td>
        <td><div class="achat"><a id="othbut" href="/?page=panier&id=' . $id_article . '">🛒</a><p>' . $detail['Prix'] . '</p></div></td></tr>';
    }
    ?></table><?php
} else {
    for ($i = 0; $i <= 3; $i++) { 
        ?><table class = "vu"><?php
        if ($catégories[$i][0]) {
            $produits = $db->prepare('SELECT * FROM Produits WHERE id_catégorie = "' . $catégories[$i][0] . '"');

            $produits->execute();
            $produits = $produits->fetchAll(); ?>
            <div id="ligne"><?php echo $catégories[$i][1]; ?></div> <?php
            foreach ($produits as $produit) {
                $id_article = $produit['Id_produit'];
                echo '<tr><td><a href="/?page=produits&id=' . $id_article . '"><img id="img" src="' . $produit['Url_img'] . '"/></a></td>
                <td><div class="achat"><a id="othbut" href="/?page=panier&id=' . $id_article . '">🛒</a><p>' . $produit['Prix'] . '</p></div></td></tr>';
            }
        }
       
    ?></table><?php }}
