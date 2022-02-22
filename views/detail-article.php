<?php include __DIR__ . '/parties/header.php'; ?>

<?php include __DIR__ . '/parties/nav.php'; ?>



<div class="row">
    <div class="col-4">
        <img src="<?= $article->image ?>" alt="" class="img-fluid thumbnail">
    </div>

    <div class="col-8">
        <dl>
            <dt>Auteur</dt>
            <dd><?= $article->auteur ?></dd>
            <dt>auteur</dt>

            <dt>Titre</dt>
            <dd><?= $article->titre ?> </dd>

            <dt>Contenu</dt>
            <dd><?= $article->contenu ?></dd>

            <?php foreach ($commentaires as $com) { ?>

                <dt>Commentaires</dt>
                <dd><?= $com->contenu ?></dd>
            <?php } ?>
        </dl>
        <form method="post">
            <div class="form-group row">
                <label for="stock" class="col-sm-12 col-form-label">Votre commentaire</label>
                <div class="col-sm-12">
                    <input type="text" class="form-control" name="contenu" id="contenu" placeholder="contenu" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Publier votre commentaire:</button>
                </div>
            </div>
        </form>
    </div>
    <a href="index.php?route=modifier-article&id=<?= $a->id ?>" class="btn btn-primary">Modifier</a>
    <a href="index.php?route=supprimer&id=<?= $a->id ?>" class="btn btn-primary">Supprimer</a>
</div>

<?php include __DIR__ . '/parties/footer.php'; ?>