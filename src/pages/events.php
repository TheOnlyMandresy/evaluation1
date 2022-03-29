<?php ob_start(); ?>

<div class="events-presentation bg-light h-50 pt-5">
    <div class="filter position-absolute"></div>
</div>

<?php require_once 'events/incomming.php'; ?>

<div class="events-what bg-info p-5">
    <h4 class="text-uppercase text-center pb-3 mb-3">Agir c'est réussir</h4>
    <p class="mb-4 text-justify">Bien que les mots jouent un rôle majeur dans l'aboutissement du projet, créer des occasions permettent de franchir différents cape. <br> Un peu comme séduire une femme, les mots peuvent en dire long mais seulement les actes permettront de créer cette réelle proximité entre vous.</p>
    <p class="mb-0 text-justify">C'est pourquoi nous avons prévu pour vous différents type de <span class="fst-italic">dates</span></p>
</div>

<div class="events-all bg-light p-5">
    <h4 class="text-uppercase text-center pb-3 mb-3">Manifestations</h4>
    <div class="cards mb-3">
        <div class="toSlide d-flex gap-3">
            <?php foreach ($manifestations as $data): ?>
            <div class="card bg-light overflow-hidden">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['name']; ?></h5>
                    <p class="card-text text-muted"><?= $data['date']; ?><?php if (!is_null($data['end'])) echo '- ' .$data['end']; ?> <br> <?= $data['place']; ?></p>
                    <p class="card-text fs-6"><?= $data['infos']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <h4 class="text-uppercase text-center p-3 mb-3">Événéments</h4>
    <p class="mb-4 text-center">Dites « organisations festives », sont les activités qui possèdent une certaines dynamique. Généralement de gros événements.</p>
    <div class="cards mb-3">
        <div class="toSlide d-flex gap-3">
            <?php foreach ($events as $data): ?>
            <div class="card bg-light overflow-hidden">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['name']; ?></h5>
                    <p class="card-text text-muted"><?= $data['date']; ?> <br> <?= $data['place']; ?></p>
                    <p class="card-text fs-6"><?= $data['infos']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <h4 class="text-uppercase text-center p-3 mb-3">Rencontres</h4>
    <p class="mb-4 text-center">Dites « organisations calmes », sont les activités qui contrairement au précédentes, sont plus tranquille. Comme un diner.</p>
    <div class="cards">
        <div class="toSlide d-flex gap-3">
            <?php foreach ($meetings as $data): ?>
            <div class="card bg-light overflow-hidden">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['name']; ?></h5>
                    <p class="card-text text-muted"><?= $data['date']; ?> <br> <?= $data['place']; ?></p>
                    <p class="card-text fs-6"><?= $data['infos']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php $body = ob_get_clean(); ?>