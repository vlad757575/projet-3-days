<?php include __DIR__ . '/parties/header.php'; ?>

<?php include __DIR__ . '/parties/nav.php'; ?>

<!-- <h1></h1> -->

<div class="row">
    <div class="col-4">
        <img src="<?= $articles->image ?>" alt="" class="img-fluid thumbnail">
    </div>

    <div class="col-8">
        <dl>
            <dt>Auteur</dt>
            <dd><?= $articles->auteur ?></dd>
            <dt>auteur</dt>

            <dt>Titre</dt>
            <dd><?= $articles->titre ?> </dd>

            <dt>Contenu</dt>
            <dd><?= $articles->contenu ?></dd>
        </dl>
    </div>
</div>

<?php include __DIR__ . '/parties/footer.php'; ?>