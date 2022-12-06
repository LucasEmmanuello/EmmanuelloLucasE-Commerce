<?php

function save_contact_form($db, $fullname, $email, $phone, $text){
    $query = $db->prepare('INSERT INTO contacts(fullname,email,phone, `text`) VALUES(:fullname, :email, :phone, :text)');
    $query->execute([
        'fullname' => $fullname,
        'email' => $email,
        'phone' => $phone,
        'text' => $text
    ]);
}


function get_all_contact_form($db){
    $query = $db->prepare('SELECT * FROM contacts');
    $query->execute();

    return $query->fetchAll();
}