<?php
session_start();
$user = $_SESSION['user'];
$pseudo = $user['pseudo'];
$login = $user['login'];
$quota = $user['quota'];

// mode day-night

if (isset($_POST['mode'])) { // Si on détecte la méthode POST pour l'input "mode"
    setcookie('mode_'.$pseudo, $_POST['mode'], time() + (86400 * 30), "/"); // 86400 = 1 jour // Alors on crée un cookie au nom "mode", qui aura pour valeur le contenu du $_POST['mode'], le '/' fait que le cookie sera là sur toutes les pages du domaine
    $mode = $_POST['mode']; // On crée une variable $mode, qui a pour valeur le thème choisi
} elseif (isset($_COOKIE['mode_'.$pseudo])) { // Si le cookie existe déjà
    $mode = $_COOKIE['mode_'.$pseudo];  // alors la variable prend pour valeur celle du cookie, ça sert à afficher le thème choisi directement
} else {
    $mode = 'light'; // Sinon, le thème sera par défaut "light"
}

// FONCTION - quota 
function checkquota() {

    $dir = '../assets/img/'.$_SESSION['user']['pseudo'].'/';
    $files = array_diff(scandir($dir), array('..', '.'));
    $usedsize = 0;

    foreach($files as $file) {
        $usedsize = $usedsize + filesize($dir.$file);
    }

    $usedsize = $usedsize/(1024*1024);
    $currentquota = $_SESSION['user']['quota'] - $usedsize;
    
    return $currentquota; 
}



include('../views/view-profil.php');