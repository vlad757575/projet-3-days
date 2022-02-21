<?php
include __DIR__ . '/parties/header.php';

include __DIR__ . '/parties/nav.php';
?>

<?php foreach ($article as $a) { ?>
    <div class="card mb-4 d-inline-flex p-2 bd-highlight mt-5" style="width: 18rem; margin:auto;">
        <img src="<?= $a->image ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $a->auteur ?> </h5>
            <h4 class="card-text"><?= $a->titre ?></h4>
            <p class="card-text"><?= resum($a->contenu); ?></p>
            <a href="index.php?route=detail-article&id=<?= $a->id ?>" class="btn btn-primary">Details</a>
            <a href="index.php?route=modifier-article&id=<?= $a->id ?>" class="btn btn-primary">Modifier</a>
        </div>
    </div>
<?php } ?>
<?php
include __DIR__ . '/parties/footer.php';
