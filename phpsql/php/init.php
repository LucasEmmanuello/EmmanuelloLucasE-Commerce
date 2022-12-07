<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();

require_once __DIR__ . '/db.php';

//CONFIG

$router_pages = ['home', 'contact', 'convert', 'login', 'register' , 'admin_contact', 'basket'];

require_once __DIR__ . '/utils/errors.php';

require_once __DIR__ . '/sql/contact.sql.php';