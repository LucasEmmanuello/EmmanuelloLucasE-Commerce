<?php
$pageTitle = "login";

ob_start();
?>

<form action="../../utils/log.php" method="post">
    <p>Identifiant: <input type="text" name="identifiant" /></p>
    <p>Mot de passe: <input type="password" name="password" /></p>
    <input type="hidden" name="type" value="login" />
    <p><input type="submit" value="OK"></p>
    <?php if(isset($_GET['error'])) echo "Pseudo ou MDP incorrect ou inexistant"; ?>
</form>

<div id = "retour">
    <a href="index.php">Retour</a>
</div>

<?php
$pageContent = ob_get_clean();