<?php
session_start();
$user = $_SESSION['user'];
$pseudo = $user['pseudo'];

$dir = "../assets/img/$pseudo/";
$files = array_diff(scandir($dir), array('..', '.'));

// Cookie thème
if (isset($_COOKIE['mode_'.$pseudo])) {
    $mode = $_COOKIE['mode_'.$pseudo];
} else {
    $mode = 'light';
}

// message si gallerie vide
if (empty($files)){
    $empty = " <h1 class='text-center text-white m-5'> 
    La galerie est vide...<i class='bi bi-emoji-frown'></i>
    </h1>";
}

// effacer une image + reload la page
if (isset($_GET['delete'])){
    $pic = $_GET['delete'];
    unlink("$dir/$pic");
    header('Location: controller-gallery.php');
}



include('../views/view-gallery.php');
