<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?route=home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?route=articles">Articles</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="index.php?route=ajouter" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ajouter un article
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <?php if (empty($_SESSION['pseudo'])) { ?>
                    <a class="nav-link" href="<?= url('connexion') ?>">Connexion</a>
                <?php } else { ?>
                    <a class=" nav-link" href="<?= url('deconnexion') ?>">Deconnexion</a>
                    <span class=" ml-auto nav-item"><?= $_SESSION['pseudo'] ?></span>
                    <img class="nav-item " style="width:30px " src="<?= $_SESSION['avatar'] ?>">
                <?php  } ?>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?route=creation-compte">Créer un compte</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>