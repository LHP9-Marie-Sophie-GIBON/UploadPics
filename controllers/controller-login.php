<?php
session_start();

$file = '../data/users.json';
$data = file_get_contents($file);
$usersArray = json_decode($data, true);
$users = $usersArray['users'];



$errors = [];
$vide = '<i class="bi bi-exclamation-circle-fill"></i> Champ obligatoire';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Vérification si les champs sont vides
    if (isset($_POST['email'])) {
        if (empty($_POST['email'])) {
            $errors['email'] = $vide;
        }
    }

    if (isset($_POST['password'])) {
        if (empty($_POST['password'])) {
            $errors['password'] = $vide;
        }
    }

    // Vérification du Login et Password
    if (empty($errors)) {
        foreach ($users as $key => $value) {
            $login = $value['login'];

            if ($_POST['email'] == $login) {
                $userKey = $key;
                break;
            }
        }
        if (isset($userKey)) {
            if (password_verify($_POST['password'], $users[$userKey]['password'])) {
                $_SESSION['user'] = [
                    'quota' => $users[$userKey]['quota'],
                    'login' => $users[$userKey]['login'],
                    'pseudo' => $users[$userKey]['pseudo']
                ];

                header("Location: controller-gallery.php");
                exit;
            } else {
                $errors['password'] = "Mot de passe incorrect";
            }
        } else {
            $errors['email'] = "Login inconnu";
        }
    }
}

$message = [];
if (isset($_GET['logout'])){
    session_destroy();
    $message['logout'] = "Vous avez bien été déconnecté(e).";
}









// on inclut view-login.php
include('../views/view-login.php');
