<?php

if(isset($_POST['type']) && $_POST['type'] =='register'){
    $nom = htmlspecialchars($_POST["pseudo"]);
    $mdp = password_hash($_POST["mot_de_passe"], PASSWORD_BCRYPT, [12]);
    $email = htmlspecialchars($_POST["email"]);
    $adresse = htmlspecialchars($_POST["adresse"]);
    $ville = htmlspecialchars($_POST["ville"]);
    
    $mdphash = 
    $insert = $dbh->prepare('INSERT INTO user(Nom, Email, Mot_de_passe, Adresse, Ville) VALUES (:Nom, :Email, :Mot_de_passe, :Adresse, :Ville)');
    $insert->execute(["Nom" => $nom, "Email" => $email, "Mot_de_passe" => $mdp, "Adresse" => $adresse, "Ville" => $ville]);

    header('Location: /?page=login&success=1');
}else{
    if(isset($_POST['type']) && $_POST['type'] =='login'){
        if (isset($_POST['nom']) && isset($_POST['mot_de_passe'])) {
        $datasql = $db->prepare('SELECT * FROM Login WHERE nom = ? AND mot_de_passe = ?');
        $datasql->execute(array($_POST['nom'], $_POST['mot_de_passe']));
        $User = $datasql->fetchAll();
    
            if (count($User) > 0) {
                $_SESSION['USER'] = $User;
                header('Location: /?page=home');
                die();
            }else {
                header('Location: /?page=login&error=1');
            }
        }
    }
}
