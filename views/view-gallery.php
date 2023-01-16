<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Pics | Galerie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/<?= $mode ?>style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <header>
        <?php include('../include/navbar.php'); ?>
    </header>

<body>

    <div class="row justify-content-center">
        <?= $empty ?? '' ?>
        <?php
        foreach ($files as $value) {
            $pics = $value;
            echo '
        <div class="col-sm-3">
        
            <div class="card cardpics">
            
                <img src="' . $dir . '/' . $pics . '" alt="image" class="card-img-top">
                <div class="card-footer text-secondary text-end ">' . $pics . '                
                <a href="controller-gallery.php?delete=' . $pics . '" class="btn text-danger removeimg" id="delete" name="delete"><i class="bi bi-trash3-fill"></i></a>
                <button class="btn text-primary" data-bs-toggle="modal" data-bs-target="#' . $pics . '"><i class="bi bi-eye-fill"></i></button>
                </div>
            
            </div>
            
        </div>

        <div class="modal fade" id="' . $pics . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <img src="' . $dir . '/' . $pics . '" alt="image" class="img-fluid">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        ';
        }
        ?>
    </div>
    <footer>
        <?php include('../include/footer.php'); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
    </script>
</body>

</html>