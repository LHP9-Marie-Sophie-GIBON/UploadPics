<?php
session_start();

$file = '../data/users.json';
$data = file_get_contents($file);
$usersArray = json_decode($data, true);
$users = $usersArray['users'];



$errors = [];
$vide = '<i class="bi bi-exclamation-circle-fill"></i> Champ obligatoire';

// Cookie thème
if (isset($_COOKIE['mode'])) {
    $mode = $_COOKIE['mode'];
} else {
    $mode = 'light';
}

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
if (isset($_GET['logout'])) {
    session_destroy();
    $message['logout'] = '
    <div class="position-fixed  end-0 p-3" style="z-index: 11">
        <div aria-live="polite" aria-atomic="true" class=" d-flex justify-content-end align-items-end">
            <div class="toast show align-items-center text-bg-primary border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        Vous avez bien été déconnecté(e).
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>';
}









// on inclut view-login.php
include('../views/view-login.php');
