<?php include __DIR__ . '/parties/header.php'; ?>
<?php include __DIR__ . '/parties/nav.php'; ?>
<h1>Se connecter</h1>

<form method="post" action="index.php?route=connexion-handler">
    <?php if (!empty($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Oups !</strong> <?= $error ?>
        </div>
    <?php } ?>

    <div class="form-group row">
        <label for="login" class="col-sm-12 col-form-label">Identifiant</label>
        <div class="col-sm-12">
            <input type="text" class="form-control" name="login" id="login" placeholder="Identifiant">
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-sm-12 col-form-label">Mot de passe</label>
        <div class="col-sm-12">
            <input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
        </div>
    </div>
    <li class="list-group-item">
        //ceci n'est pas un gateau//
        <input class="form-check-input me-1" type="checkbox" value="true" name="cookie" id="cookie" aria-label="...">
        Se souvenir de moi !!
    </li>
    <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Connexion</button>
        </div>

    </div>
</form>

<?php include __DIR__ . '/parties/footer.php'; ?>