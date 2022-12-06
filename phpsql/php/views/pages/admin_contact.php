<?php
$pageTitle = "admin_contact";

$all_forms = $contactFormManager->get_all_contact_form();

ob_start();
?>
<h1>Admin Contact Page</h1>
<ul>
    <?php
    foreach($all_forms as $form){
    ?>
    <li><?php echo $form->fullname; ?></li>
    <?php } ?>
</ul>

<?php
$pageContent = ob_get_clean();