<?php
$pageTitle = "Login";

ob_start();
?>

<div class="align">
    <div class = "logreg">
        <form action="/actions/log.php" method="post">
            <p>Nom: </p><input id="inp" type="text" name="nom" />
            <p>Mot de passe: </p><input id="inp" type="password" name="mot_de_passe" />
            <input type="hidden" name="type" value="login" />
            <p><input id="submit" type="submit" value="OK"></p>
            <?php if(isset($_GET['error'])) echo "Pseudo ou MDP incorrect ou inexistant"; ?>
        </form>
        <?php if(isset($_GET['success']) && $_GET['success'] == 2){?>
            <p>Votre compte à été créer avec succès !</p>
        <?php } elseif(isset($_GET['success']) && $_GET['success'] == 3){?>
            <p>Votre demande est en court de traitement. Vous receverez un mail lorsqu'il sera validé.</p>
        <?php } ?>
        <div id = "retour">
            <a href="/?page=home">Retour</a>
        </div>
    </div>
    <a href="/?page=register">Pas de compte ? Créer en un ici !</a>
</div>
