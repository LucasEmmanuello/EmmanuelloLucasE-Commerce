<?php

if(isset($_POST['type']) && $_POST['type'] =='login'){
    if (isset($_POST['nom']) && isset($_POST['mot_de_passe'])) {
    $datasql = $db->prepare('SELECT * FROM Login WHERE nom = ? AND mot_de_passe = ?');
    $datasql->execute(array($_POST['nom'], $_POST['mot_de_passe']));
    $User = $datasql->fetchAll();

        if (count($User) > 0) {
            $_SESSION['USER'] = $User;
            $pages = "home";
            header('Location: /index.php');
            die();
        }else {
            $pages = "home";
            header('Location: /index.php');
        }
    }
}
?>
