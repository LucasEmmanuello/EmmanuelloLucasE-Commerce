<?php
$pageTitle = "Login";

ob_start();
?>

<div class = "login">
    <form action="/actions/log.php" method="post">
        <p>Nom: <input type="text" name="nom" /></p>
        <p>Mot de passe: <input type="password" name="mot_de_passe" /></p>
        <input type="hidden" name="type" value="login" />
        <p><input id="submit" type="submit" value="OK"></p>
        <?php if(isset($_GET['error'])) echo "Pseudo ou MDP incorrect ou inexistant"; ?>
    </form>
    <div id = "retour">
        <a href="/?page=home">Retour</a>
    </div>
</div>

<?php
$pageContent = ob_get_clean();