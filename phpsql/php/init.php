<?php
session_start();

require_once __DIR__ . '/db.php';

//CONFIG

$router_pages = ['home', 'contact', 'convert', 'login', 'admin_contact'];

require_once __DIR__ . '/utils/errors.php';

require_once __DIR__ . '/sql/contact.sql.php';