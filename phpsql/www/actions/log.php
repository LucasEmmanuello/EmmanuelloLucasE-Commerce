<?php

require_once __DIR__ . "/../../php/init.php";

if(isset($_POST['type']) && $_POST['type'] =='register'){
    $nom = htmlspecialchars($_POST["nom"]);
    $mdp = password_hash($_POST["mot_de_passe"], PASSWORD_BCRYPT, [12]);
    $email = htmlspecialchars($_POST["email"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $ville = htmlspecialchars($_POST["ville"]);

    if (isset($_POST['who']) && $_POST['who'] == 'client') {
        $utils = 2;
    }elseif (isset($_POST['who']) && $_POST['who'] == 'vendeur') {
        $utils = 3;
    }

    $insert = $db->prepare('INSERT INTO user(Nom, Email, Mot_de_passe, Adresse, Ville, Utilisation) VALUES (:Nom, :Email, :Mot_de_passe, :Adresse, :Ville, :Utilisation)');
    $insert->execute(["Nom" => $nom, "Email" => $email, "Mot_de_passe" => $mdp, "Adresse" => $adresse, "Ville" => $ville, "Utilisation" => $utils]);

    header('Location: /?page=login&success='.$utils);
    
}elseif(isset($_POST['type']) && $_POST['type'] =='login'){
    if (isset($_POST['nom']) && isset($_POST['mot_de_passe'])) {
        $datasql = $db->prepare('SELECT * FROM User WHERE Nom = ?');
        $datasql->execute(array($_POST['nom']));
        $User = $datasql->fetchAll();

        if (count($User) > 0) {
            if(password_verify($_POST['mot_de_passe'],password_hash($_POST["mot_de_passe"], PASSWORD_BCRYPT, [12]))){
                $panier = $db->prepare('CREATE TABLE Panier (Position_article INT NOT NULL AUTO_INCREMENT,id_article INT NOT NULL,PRIMARY KEY (Position_article)) ENGINE = InnoDB;');
                $panier->execute();
                header('Location: /?page=home&connected');
                die();
            }
        }else {
            header('Location: /?page=login&error');
            die();
        }
    }
} 
