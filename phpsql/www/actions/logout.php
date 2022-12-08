<?php

require_once __DIR__ . "/../../php/init.php";

unset($_SESSION['User']);

header('Location : ?/page=home');