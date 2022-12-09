<?php

require_once __DIR__ . "/../../php/init.php";

session_unset();

header('Location : /?page=home');