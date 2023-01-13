<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Pics | Login</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><i class="bi bi-emoji-sunglasses"></i> Upload Pics</a>
            </div>
        </nav>

    </header>

    <main>
        <div class="container text-center">
            <div class="row justify-content-center">


                <form class="col-sm-6 rounded" action="" method="post">
                    <span class="text-success">
                    <?= $message['logout'] ?? ""; ?>
                    </span>
                    <h1 class="mt-2 fw-bold">Connexion</h1>
                    <!-- input Email -->
                    <div>
                        <label for="Email" class="text-danger">
                            <?= $errors['email'] ?? ""; ?>
                        </label><br>
                        <input type="text" class="rounded btn btn-outline-dark" placeholder="Email" size="40px" id="email" name="email" value="<?= $_POST['email'] ?? ''; ?>">
                    </div>


                    <!-- input Password -->
                    <div>
                        <label for="password" class="text-danger">
                            <?= $errors['password'] ?? ""; ?>
                        </label><br>
                        <input type="password" id="password" name="password" placeholder="Mot de passe" class="rounded btn btn-outline-dark" size="40px">
                    </div>

                    <!-- SUBMIT -->
                    <button type="submit" class="btn btn-outline-primary mt-5">Valider</button>
                </form>


            </div>
        </div>
    </main>
</body>

</html>