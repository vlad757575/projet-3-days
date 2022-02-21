<?php include __DIR__ . '/parties/header.php'; ?>

<?php include __DIR__ . '/parties/nav.php'; ?>

<!-- <h1></h1> -->

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
        </dl>
    </div>
    <a href="index.php?route=modifier-article&id=<?= $a->id ?>" class="btn btn-primary">Modifier</a>
    <a href="index.php?route=supprimer&id=<?= $a->id ?>" class="btn btn-primary">Supprimer</a>
</div>

<?php include __DIR__ . '/parties/footer.php'; ?>