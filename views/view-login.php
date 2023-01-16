<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Pics | Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/<?= $mode ?>style.css">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="https://img.icons8.com/ios/40/null/happy-cloud.png" /> Upload Pics</a>
            </div>
        </nav>
    </header>
    <?= $message['logout'] ?? ""; ?>
    <main>
        <div class="container text-center">
            <div class="row justify-content-center">


                <form class="col-sm-6 rounded" action="" method="post">
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="myToast">
                        <div class="toast-body text-success fw-bold">
                            Vous avez bien été déconnecté(e).
                        </div>
                    </div>
                    

                    <h1 class="mt-5 fw-bold text-white">Connexion</h1>
                    <!-- input Email -->
                    <div>
                        <label for="Email" class="text-danger">
                            <?= $errors['email'] ?? ""; ?>
                        </label><br>
                        <input type="text" class="rounded btn btn-light" placeholder="Email" size="40px" id="email" name="email" value="<?= $_POST['email'] ?? ''; ?>">
                    </div>


                    <!-- input Password -->
                    <div>
                        <label for="password" class="text-danger">
                            <?= $errors['password'] ?? ""; ?>
                        </label><br>
                        <input type="password" id="password" name="password" placeholder="Mot de passe" class="rounded btn btn-light" size="40px">
                    </div>

                    <!-- SUBMIT -->
                    <button type="submit" class="btn btn-primary mt-5">Valider</button>
                </form>


            </div>
        </div>
    </main>
    <footer>
<?php include('../include/footer.php'); ?>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
 
</body>

</html>