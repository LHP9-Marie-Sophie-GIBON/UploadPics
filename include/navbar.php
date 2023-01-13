        <nav class="navbar navbar-expand-lg sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="https://img.icons8.com/ios/40/null/happy-cloud.png"/> Upload Pics</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/controller-gallery.php">Galerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/controller-upload.php">Upload</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-circle"></i> Bonjour <?= $pseudo ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../controllers/controller-profil.php" name="profil"><i class="bi bi-person"></i> Profil</a></li>
                                <li><a class="dropdown-item" href="../controllers/controller-login.php?logout=1" name="logout"><i class="bi bi-box-arrow-left"></i> Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>    

    
