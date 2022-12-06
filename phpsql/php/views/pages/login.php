<?php
$pageTitle = "login";

ob_start();
?>

<div class = "login">
    <form action="../../utils/log.php" method="post">
        <p>Nom: <input type="text" name="nom" /></p>
        <p>Mot de passe: <input type="password" name="mot_de_passe" /></p>
        <input type="hidden" name="type" value="login" />
        <p><input id="submit" type="submit" value="OK"></p>
        <?php if(isset($_GET['error'])) echo "Pseudo ou MDP incorrect ou inexistant"; ?>
    </form>
    <div id = "retour">
        <?php $page = "home" ?>
        <a href="index.php">Retour</a>
    </div>
</div>

<?php
$pageContent = ob_get_clean();