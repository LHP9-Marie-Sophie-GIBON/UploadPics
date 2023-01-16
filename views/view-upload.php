<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Pics | Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/<?= $mode ?>style.css">


</head>
<header>
    <?php include('../include/navbar.php'); ?>
</header>

<body>
    <div class="row justify-content-center">

        <div class="card m-5">
            <img src="https://caer.univ-amu.fr/wp-content/uploads/default-placeholder.png" height="200" alt="Image preview" id="preview1" class="card-img-top" />
            <form action="" method="post" enctype="multipart/form-data">

                <div class="card-body text-center">
                    <!-- Input sélection d'image -->
                    <input type="file" name="fileToUpload" id="fileToUpload" onchange="document.getElementById('preview1').src = window.URL.createObjectURL(this.files[0])">
                    <p><?= $messages['fileToUpload'] ?? ""; ?></p>

                </div>
                <div class="card-footer text-center">
                    <!-- Input upload -->
                    <button class="btn btn-primary" type="submit" name="submit">
                        <i class="bi bi-cloudy"></i> Upload
                    </button>
                </div>
            </form>
        </div>

    </div>
    <footer>
        <?php include('../include/footer.php'); ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>