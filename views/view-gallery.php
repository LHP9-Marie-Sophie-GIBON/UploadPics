<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Pics | Galerie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<header>
    <?php include('../include/navbar.php'); ?>
</header>

<body>
   
        <div class="row" >
       <?= $empty ?? ''?>
      <?php 
      foreach ($files as $value) {
        $pics = $value;
        echo '
        <div class="col-sm-3">
            <div class="card cardpics">
                <img src="' . $dir . '/' . $pics . '" alt="image" class="card-img-top">
                <div class="card-footer text-secondary text-end ">' . $pics . '                
                <button class="btn text-danger" id="delete"><i class="bi bi-trash3-fill"></i></button>
                </div>
            </div>
            </div>
        '; 
    }
      ?>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>