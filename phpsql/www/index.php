<?php

require_once __DIR__ . '/../php/init.php';

//ROUTER

$page = "home";

if(isset($_GET['page'])){
    if(in_array($_GET['page'], $router_pages)){
        $page = $_GET['page'];
    } else {
        $page = '404';
    }
}

require_once __DIR__ . '/../php/views/pages/' .$page. '.php';
$pageContent = ob_get_clean();
require_once __DIR__ . '/../php/views/partials/header.php';
echo $pageContent;
require_once __DIR__ . '/../php/views/partials/footer.php';
