<?php

require_once __DIR__ . '/inc/db-connect.php';
require_once __DIR__ . '/inc/functions.php';

if (!empty($_POST)) {

    $name = '';
    if (isset($_POST['name'])) {
        $name = @(string) $_POST['name'];
    }

    $email = '';
    if (isset($_POST['email'])) {
        $email = @(string) $_POST['email'];
    }

    $telephone = '';
    if (isset($_POST['telephone'])) {
        $telephone = @(string) $_POST['telephone'];
    }

    $country = '';
    if (isset($_POST['country'])) {
        $country = @(string) $_POST['country'];
    }

    $details = '';
    if (isset($_POST['details'])) {
        $details = @(string) $_POST['details'];
    }

    if (!empty($name) && !empty($email) && !empty($telephone) && !empty($country) && !empty($details)) {
        $stmt = $pdo->prepare('INSERT INTO entries (`name`, `email`, `telephone`, `country`, `details`) VALUES (:name, :email, :telephone, :country, :details)');
        $stmt->bindValue('name', $name);
        $stmt->bindValue('email', $email);
        $stmt->bindValue('telephone', $telephone);
        $stmt->bindValue('country', $country);
        $stmt->bindValue('details', $details);
        $stmt->execute();

        echo '<a href="/">Zurück zum Coffeorigin...</a>';
        die();
    }
}

$errorMessage = 'Wrong Data Submitted';
require __DIR__ . '/index.php';