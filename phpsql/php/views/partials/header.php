<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css"/>
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
<header>
    <div class="dis_header">
        <div class="head">
            <h1>S</h1><h2>econd</h2><h1>S</h1><h2>ouffle</h2>
        </div>
        <div class="button">
            <a id="log" href="/?page=login">Login</a>
            <a id="shop" href="/?page=panier">🛒</a>
        </div>
    </div>
    <div class="recherche">
        <form action="/actions/recherche.php" method="get">
        <input id="search" type="search" name="search" placeholder="Rechercher..." />
        <button id="srchb" type="submit">🔍</button>
        </form>
    </div>
</header>