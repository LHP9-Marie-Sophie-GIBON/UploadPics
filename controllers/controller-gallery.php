<?php
session_start();
$user = $_SESSION['user'];
$pseudo = $user['pseudo'];








include('../views/view-gallery.php');
include('../include/navbar.php');