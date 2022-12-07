<?php
$pageTitle = "Register";

ob_start();
?>

<div class="align">
    <div class="button">
        <a id="log" href="/?page=register&compte_client">Client ?</a>
        <a id="log" href="/?page=register&compte_vendeur">Vendeur ?</a>
    </div>
    <?php if(isset($_GET['compte_client'])){?>
    <div class = "logreg">
        <p>Création compte Client</p>
        <form action="actions/log.php" method="post">
            <p>Email : </p><input id="inp" type="email" name="email"/>           
            <p>Nom : </p><input id="inp" type="text" name="nom"/>
            <p>Mot de passe : </p><input id="inp" type="password" name="mot_de_passe"/>          
            <p>Adresse: </p><input id="inp" type="text" name="adresse"/>
            <p>Ville + (Code Postale): </p><input id="inp" type="text" name="ville"/>
            <input type="hidden" name="who" value="client"/>
            <input type="hidden" name="type" value="register"/>
            <button id="submit" type="submit">S'inscrire</button>
        </form>
        <div id = "retour">
            <a href="/?page=home">Retour</a>
        </div>
    </div>
    <?php } elseif(isset($_GET['compte_vendeur'])){?>
        <div class = "logreg">
        <p>Création compte Vendeur</p>
        <p>En vous inscrivant, vous attestez avoir lu nos<a href="/Confidentialité.pdf"> Conditions de Confidentialité</a></p>
        <form action="actions/log.php" method="post">
            <p>Email : </p><input id="inp" type="email" name="email"/>           
            <p>Nom : </p><input id="inp" type="text" name="nom"/>
            <p>Mot de passe : </p><input id="inp" type="password" name="mot_de_passe"/>          
            <p>Adresse: </p><input id="inp" type="text" name="adresse"/>
            <p>Ville + (Code Postale): </p><input id="inp" type="text" name="ville"/>
            <p>Carte d'identité</p><input type="file" accept="image/*" />
            <input type="hidden" name="who" value="vendeur"/>
            <input type="hidden" name="type" value="register"/>
            <button id="submit" type="submit">S'inscrire</button>
        </form>
        <div id = "retour">
            <a href="/?page=home">Retour</a>
        </div>
    </div>
    <?php } ?>
    <a href="/?page=login">J'ai déjà un compte !</a>
</div>

<?php
$pageContent = ob_get_clean();