<?php

session_start();

require_once __DIR__ . '/db.php';

//CONFIG

$router_pages = ['home', 'contact', 'login', 'register' , 'admin', 'panier', 'produits', 'gestion', 'admin'];

require_once __DIR__ . '/utils/errors.php';

require_once __DIR__ . '/utils/function.php';

require_once __DIR__ . '/sql/contact.sql.php';