<?php
session_start();
$user = $_SESSION['user'];
$pseudo = $user['pseudo'];

$dir = "../assets/img/$pseudo/";
$files = array_diff(scandir($dir), array('..', '.'));



if (empty($files)){
    $empty = " <h1 class='text-center m-5'> 
    La galerie est vide...<i class='bi bi-emoji-frown'></i>
    </h1>";
}




include('../views/view-gallery.php');
