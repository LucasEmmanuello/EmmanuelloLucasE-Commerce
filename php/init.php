<?php
// premiere chose a faire : demarrer les sessions.
session_start();

/*
 ensuite on require_once (car on ne souhaite require ce fichier qu'une seule fois) le fichier db.php se trouvant dans le meme dossier
 donc on met la constante __DIR__ (qui pointe vers le dossier de ce script init.php) et on concat avec '/db.php' (on met une slash car __DIR__ renvoie le chemin actuel sans slash de fin /Users/myuser/dossier-projet/php)
 cela donne : /Users/myuser/dossier-projet/php/db.php
*/
require_once __DIR__ . '/db.php';
