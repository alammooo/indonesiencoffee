<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=?????????', '??????????', '2eCO~g1[!u*%'); [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
}
catch(PDOException $e){
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}
?>