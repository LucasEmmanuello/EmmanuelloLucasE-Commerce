<?php
$pageTitle = "contact";

$error_message = get_error();

ob_start();
?>

<?php if ($error_message){ ?>
    <p><?= $error_message ?></p>
<?php } ?>

<h1>Contact Page</h1>

<form action="actions/send_contact.php" method="post">
    Full Name: <input type="text" name="fullname" /><br>
    Email: <input type="email" name="email" /><br>
    Phone: <input type="text" name="phone" /><br>
    Votre message: <br>
    <textarea name="text"></textarea>
    <button type="submit">Envoyer</button>
</form>

<?php
$pageContent = ob_get_clean();
