<?php
$pageTitle = "Register";

ob_start();
?>

<div class="align">
    <div class = "logreg">
        <form action="actions/log.php" method="post">
            <p>Email : </p><input id="inp" type="email" name="email"/>           
            <p>Nom : </p><input id="inp" type="text" name="nom"/>
            <p>Mot de passe : </p><input id="inp" type="password" name="mot_de_passe"/>          
            <p>Adresse: </p><input id="inp" type="text" name="adresse"/>
            <p>Ville + (Code Postale): </p><input id="inp" type="text" name="ville"/>
            <input type="hidden" name="type" value="register"/>
            <button id="submit" type="submit">S'inscrire</button>
        </form>
        <div id = "retour">
            <a href="/?page=home">Retour</a>
        </div>
    </div>
    <a href="/?page=login">J'ai déjà un compte !</a>
</div>

<?php
$pageContent = ob_get_clean();