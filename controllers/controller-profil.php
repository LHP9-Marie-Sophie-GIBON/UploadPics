<?php
session_start();
$user = $_SESSION['user'];
$pseudo = $user['pseudo'];
$login = $user['login'];
$quota = $user['quota'];





include('../views/view-profil.php');