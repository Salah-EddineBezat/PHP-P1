<?php
session_start();

if (isset($_SESSION["username"])) {
    $username = $_SESSION['username'];
} else {
    $username = 'Gast';
}

if (isset($_POST['submit'])) {
    $errors = [];

    // Gebruikersnaam validatie 
    $username = trim($_POST['name']);
    if (empty($username) || strlen($username) < 3 || strlen($username) > 15) {
        $errors[] = 'De gebruikersnaam moet tussen 3 en 15 tekens lang zijn.';
    }

    // Email validatie
    $email = trim($_POST['email']);
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Voer een geldige e-mailadres in.';
    }

    // Wachtwoord validatie
    $password = trim($_POST['password']);
    if (empty($password) || strlen($password) < 6) {
        $errors[] = 'Het wachtwoord moet minimaal 6 tekens lang zijn.';
    }

    // Geslacht validatie
    $geslacht = trim($_POST['gender']);
    if (empty($_POST['gender'])) {
        $errors[] = 'Kies een geslacht.';
    }

    // Land validatie
    $country = trim($_POST['countries']);
    if (empty($country)) {
        $errors[] = 'Kies een land';
    }

    // Session controle username
    if (empty($errors)) {
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
