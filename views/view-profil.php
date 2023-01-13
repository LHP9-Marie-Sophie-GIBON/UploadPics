<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Pics | Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<header>
    <?php include('../include/navbar.php'); ?>
</header>

<body>
    <main class="row justify-content-center">
        <div class="card m-5">
            <div class="card-header h5">
                Profil
            </div>
            <div class="card-body">
                <p class="card-text"><i class="bi bi-person-fill"></i> Pseudo : <?= $pseudo ?></p>
                <p class="card-text"><i class="bi bi-envelope-at-fill"></i> Email : <?= $login ?></p>
                <p class="card-text"><i class="bi bi-asterisk"></i> Quota : <?= $quota ?></p>
                
                <form method="post" action="">
                    <select name="Day/Night mode" id=""> <br>
                        <option value="day"><i class="bi bi-sun"></i> mode</option>
                        <option value="night"><i class="bi bi-moon-stars"></i> mode</option>
                    </select>
                    <button type="submit" class="btn btn-outline-primary">valider</button>
                </form>

            </div>
    </main>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>