<?php
$pageTitle = "Home";

ob_start();


/*if(isset($_POST['ajout'])){
    if($user){
        echo 'yep';
    }
    //$ajout = $db->prepare('CREATE TABLE `SecSou`.`Panier` ( `Id_panier` INT NOT NULL AUTO_INCREMENT , PRIMARY KEY (`id_panier`))ENGINE = InnoDB;');
    //$ajout->execute();
    //ALTER TABLE `Panier` ADD `article` INT NOT NULL AFTER `Panier`;
}*/

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
                echo '<tr><td><a href="/?page=product_page&id='.$produit['Id_produit'].'"><img id="img" src="'.$produit['Url_img'].'"/></a></td>
                <td><div class="achat"><form method="post"><p><input id="submit" type="submit" value="🛒" name="ajout"></form></p><p>'.$produit['Prix'].'</p></div></td></tr>';

            }
        }
        ?>
    </table>
<?php } ?>
