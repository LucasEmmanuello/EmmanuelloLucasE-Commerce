<?php

require_once __DIR__ . '/../../php/init.php';

if(isset($_POST['fullname'], $_POST['phone'], $_POST['email'], $_POST['text'])){
    save_error("Tous les champs ne sont pas rempli");
}

if(strlen($_POST['text']) < 10){
    save_error('Votre message est trop petit');
}

if(empty($_POST['fullname'])){
    save_error("Entrez votre nom");
}

if(empty($_POST['phone'])){
    save_error("Entrez votre téléphone");
}

if(empty($_POST['email'])){
    save_error("Entrez votre email");
}

if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
    save_error("Votre email est incorrect");
}

$fullname = htmlspecialchars($_POST['fullname']);
$phone = htmlspecialchars($_POST['phone']);
$text = htmlspecialchars($_POST['text']);

save_contact_form($db, $fullname, $_POST['email'], $phone, $text);
header('Location: ' . $_SERVER['HTTP_REFERER'] . '&success=1');