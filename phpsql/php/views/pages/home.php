<?php
$pageTitle = "Home";

ob_start();


if(isset($_POST)){
    if(isset($_GET['connected'])){
        var_dump($_POST) ;
        //$ajout = $db->prepare('INSERT INTO Panier(id_article) VALUES (:id_article)');
        //$ajout->execute(["id_article" => $_POST]);
    }
}

$catégories = $db->prepare('SELECT * FROM Catégorie');

$catégories -> execute();
$catégories = $catégories->fetchAll();


for ($i = 0; $i <= 3; $i++){?>
    <table class = "vu">
        <?php
        if($catégories[$i][0]){
            $produits = $db->prepare('SELECT * FROM Produits WHERE id_catégorie = "'.$catégories[$i][0].'"');

            $produits -> execute();
            $produits = $produits->fetchAll();?>
            <div id="ligne"><?php echo $catégories[$i][1];?></div> <?php
            foreach($produits as $produit) {
                $id_article = $produit['Id_produit'];
                echo '<tr><td><a href="/?page=product_page&id="'.$id_article.'"><img id="img" src="'.$produit['Url_img'].'"/></a></td>
                <td><div class="achat"><form method="post"><p><input id="submit" type="submit" value="🛒" name="'.$id_article.'"></form></p><p>'.$produit['Prix'].'</p></div></td></tr>';
            }
        }
        ?>
    </table>
<?php } ?>
