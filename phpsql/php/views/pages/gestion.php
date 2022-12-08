<?php
$pageTitle = "Gestion";

ob_start();
?>

<div class="align">
    <div class="button"><?php
    if(isset($_SESSION['User']) && $_SESSION['User'] == 1) { ?>
        <a id="log" href="/?page=admin">Gestion des comptes vendeur</a>
        <a id="log" href="/?page=gestion&produits">Gestion des produits</a>
    </div>
    <?php } else{
        header('Location: /?page=gestion&produits');
    }

    if(isset($_GET['produits'])) {
        $catégories = $db->prepare('SELECT * FROM Catégorie');

        $catégories->execute();
        $catégories = $catégories->fetchAll();

        for ($i = 0; $i <= 3; $i++) { ?>
            <table class = "vu">
                <?php
            if ($catégories[$i][0]) {
                $produits = $db->prepare('SELECT * FROM Produits WHERE id_catégorie = "' . $catégories[$i][0] . '"');

                $produits->execute();
                $produits = $produits->fetchAll(); ?>
                    <div id="ligne"><?php echo $catégories[$i][1]; ?></div> <?php
                foreach ($produits as $produit) {
                    $id_article = $produit['Id_produit'];
                    echo '<tr><td><img id="img" src="' . $produit['Url_img'] . '"/></td>
                    <td><div class="achat"><a href="/?page=produits&id='. $id_article .'&gestion">🖋️</a></p><p>' . $produit['Prix'] . '</p></div></td></tr>';
                }
            }?>
            </table>
        <?php }
    }?>
    
   
