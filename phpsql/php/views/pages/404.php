<?php
$pageTitle = "404";

ob_start();
?>

<h1>Page not found (404)</h1>

<?php
$pageContent = ob_get_clean();

