<?php
$pageTitle = "Produits";

ob_start();

if(isset($_POST['del'])){
    $delete = $db->prepare('DELETE FROM Produits WHERE Id_produit = "'.$_GET['id'].'"');
    $delete->execute();
    header('Location: /?page=gestion&produits');
}

if (isset($_POST['create'])) {
    if (empty($_POST['nom'])) {
        echo "Veuillez remplir le Nom !";
    } elseif (empty($_POST['stock'])) {
        echo "Veuillez remplir le champ Stock !";
    } elseif (empty($_POST['prod_img'])) {
        echo "Veuillez importer une Image ! ";
    } elseif (empty($_POST['prix'])) {
        echo "Veuillez remplir le champ Prix !";
    } elseif (empty($_POST['catégorie'])) {
        echo "Veuillez sélectionner la Catégorie de votre produit !";
    } else{
        $prix = $_POST['prix'] . " Є ";
        $extension  = move_uploaded_file($_POST['prod_img'], '/img');
        $create = $db->prepare('INSERT INTO Produits(Nom,Stock,Note,Url_img,id_catégorie,Prix) VALUES (?,?,?,?,?,?)');
        $create->execute(array($_POST['nom'],$_POST['stock'],5,$_POST['prod_img'],$_POST['catégorie'],$prix));
    }
}

if(isset($_POST['edit'])){
    if(!empty($_POST['chg_name'])){
        $edit = $db->prepare('UPDATE Produits SET Nom = "'.$_POST['chg_name'].'" WHERE Id_produit = "'.$_GET['id'].'"');
        $edit->execute();
    }
    if(!empty($_POST['chg_prix'])){
        $prix = $_POST['chg_prix'] . " Є ";
        $edit = $db->prepare('UPDATE Produits SET Prix = "'.$prix.'" WHERE Id_produit = "'.$_GET['id'].'"');
        $edit->execute();
    }
    if(!empty($_POST['chg_stock'])){
        $edit = $db->prepare('UPDATE Produits SET Stock = "'.$_POST['chg_stock'].'" WHERE Id_produit = "'.$_GET['id'].'"');
        $edit->execute();
    }
    if(!empty($_POST['chg_url'])){
        $edit = $db->prepare('UPDATE Produits SET Url_img = "'.$_POST['chg_url'].'" WHERE Id_produit = "'.$_GET['id'].'"');
        $edit->execute();
    }
}

if(!isset($_GET['create'])){

    $produit = $db->prepare('SELECT * FROM Produits WHERE id_produit = "'.$_GET['id'].'"');

    $produit -> execute();
    $produit = $produit->fetchAll();

foreach($produit as $info) {
    echo '<tr><td><img id="img" src="'.$info['Url_img'].'"/></a></td>
    <td><div class="achat"><form method="post"><p><input id="submit" type="submit" value="🛒"></form></p><p> Nom : '.$info['Nom'].'</p><p> Prix : '.$info['Prix'].'</p><p> Stock : '.$info['Stock'].'</p>
    <p> Note : '.$info['Note'].' /5</p></div></td></tr>';
}

if(isset($_GET['gestion'])){?>
    <div class= "align">
            <p>Modifier ...</p>
        <form method="post">
                <p>le nom : </p><input id="inp" type="text" name="chg_name" />
                <p>le prix : </p><p><input id="inp" type="text" name="chg_prix" /> Є</p>
                <p>le stock : </p><input id="inp" type="text" name="chg_stock" />
                <p>l'image (l'URL) : </p><input id="inp" type="text" name="chg_url" />
                <input type="hidden" name="edit" />
                <p><input id="submit" type="submit" value="✔️"></p>
        </form>
        <div id = "retour">
            <a href="/?page=home">Retour</a>
        </div>
    </div>
<?php
}

if(isset($_GET['suppression'])){?>
    <div id="align">
        <p>êtes vous sur de vouloir supprimer cette article.</p>
        <form method="post">
            <input type="hidden" name="del"/>
            <button id="submit" type="submit">Oui.</button>
        </form>
        <div id = "retour">
                <a href="/?page=home">Retour</a>
        </div>
        </div>
    
<?php }
    }else{?>
    <div class="align">
        <div class = "logreg">
            <p>Création Produit</p>
            <form method="post">
                <p>Nom : </p><input id="inp" type="text" name="nom"/>           
                <p>Stock : </p><input id="inp" type="int" name="stock"/>
                <p>Url de l'image :</p><input type="text" name="prod_img" /> 
                <p>Prix : </p><p><input id="inp" type="text" name="prix"/>Є</p>   
                <label for="cat-select">Catégorie : </label>
                <select name="catégorie" id="cat-select">
                    <option value="">Sélectionner une catégorie</option>
                    <option value="1">Clé Jv</option>
                    <option value="2">Clé liscence OS</option>
                    <option value="3">Clé liscence logiciel</option>
                    <option value="5">Monnaie virtuelle</option>
                </select>
                <input type="hidden" name="create"/>
                <button id="submit" type="submit">✔️</button>
            </form>
            <div id = "retour">
                <a href="/?page=home">Retour</a>
            </div>
        </div>
    </div>
<?php }



