<?php
session_start();
$user = $_SESSION['user'];
$pseudo = $user['pseudo'];
$quota = $user['quota'];


$response = [];
$format = [
    "jpg",
    "jpeg",
    "png",
    "webp"
];

// Cookie thème
if (isset($_COOKIE['mode_'.$pseudo])) {
    $mode = $_COOKIE['mode_'.$pseudo];
} else {
    $mode = 'light';
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

// FONCTION - Contrôle du format du fichier : sélection -image - format - taille
function checkImg($name, $imgSize, $format)
{
    $response = [];
    if ($_FILES[$name]['error'] === 4) {
        $response = [
            'status' => false,
            'message' => "<span class='text-danger'>'<i class='bi bi-exclamation-circle-fill'></i> Champ obligatoire : Veuillez sélectionner un fichier</span>"
        ];
    } else if (!preg_match('/image/', mime_content_type($_FILES[$name]['tmp_name']))) {
        $response = [
            'status' => false,
            'message' => "<span class='text-danger'><i class='bi bi-x-circle-fill'></i> Format incorrect : Veuillez sélectionner un fichier de type image</span>"
        ];
    } else if (!in_array(explode('/', mime_content_type($_FILES[$name]['tmp_name']))[1], $format)) {
        $response = [
            'status' => false,
            'message' => "<span class='text-danger'><i class='bi bi-x-circle-fill'></i> Fichier non supporté : le fichier doit être au format jpg/png/webp</span>"
        ];
    } else if ($_FILES[$name]['size'] > ($imgSize)) {
        $response = [
            'status' => false,
            'message' => "<span class='text-danger'><i class='bi bi-x-circle-fill'></i> Fichier non supporté : La taille de l'image ne doit pas dépasser 2 Mo</span>"
        ];
    } else if ($_FILES[$name]['size'] / (1024 * 1024) > checkquota()) {
        $response = [
            'status' => false,
            'message' => "<span class='text-danger'><i class='bi bi-x-circle-fill'></i> Fichier non supporté : votre quota est dépassé (" .$_SESSION['user']['quota']. ")</span>"
        ];
    } else {
        $response = [
            'status' => true,
            'message' => "image safe"
        ];
    }
    return $response;
}

// FONCTION - Upload de l'image
function uploadImg($name, $formatImg, $target_dir)
{
    $response = [];
    if (move_uploaded_file($_FILES[$name]["tmp_name"], $target_dir . uniqid() . "$formatImg")) {
        $response = [
            'status' => true,
            'message' => "<span class='text-success fw-bold'>L'image a bien été téléchargée</span>"
        ];
    } else {
        $response = [
            'status' => false,
            'message' => "<span class='text-danger'>l'image n'a pas pu être téléchargée</span>"
        ];
    }
    return $response;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST["submit"])) {

        foreach ($_FILES as $key => $value) {
            $response = checkImg($key, 2097152, $format);
           
            if ($response['status'] === false) {
                $messages[$key] = $response['message'];
            } else {
                $messages[$key] = uploadImg($key, ".webp", "../assets/img/$pseudo/")['message'];
            }
        }
    }
};




include('../views/view-upload.php');