<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=phpbdd', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
