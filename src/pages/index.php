<?php ob_start(); ?>

<div class="index-landing d-flex gap-3 p-3 mx-auto flex-column justify-content-center h-100 py-5 text-center text-white">
    <div class="logo-XL mb-3"></div>
    <h1>Le monde n'est pas assez triste</h1>
    <p>- <?= $website['title']; ?></p>
</div>

<div class="index-events d-grid gap-3 p-3 border-bottom bg-dark accordion" id="latestsEvents">
    <?php for ($i = 0; $i < 3; $i++): ?>
    <div class="card text-white bg-dark overflow-hidden">
        <div class="card-header">Événement du <?= $all[$i]['date']; ?></div>

        <div class="accordion-item bg-dark">
            <h5 id="HeadShowEvent<?= $i; ?>" class="card-title accordion-header bg-secondary">
                <button class="bg-secondary accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#showEvent<?= $i; ?>" aria-expanded="false" aria-controls="showEvent<?= $i; ?>">
                <?= $all[$i]['name']; ?>
                </button>
            </h5>
            
            <div id="showEvent<?= $i; ?>" class="card-text accordion-collapse collapse" aria-labelledby="HeadShowEvent<?= $i; ?>">
                <div class="accordion-body"><?= $all[$i]['infos']; ?></div>
            </div>
        </div>
    </div>
    <?php endfor; ?>

    <div class="more d-flex flex-column justify-content-center">
        <a href="/events">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar4-event text-primary" viewBox="0 0 16 16">
        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
        <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
        </svg>
        </a>
    </div>
</div>

<div class="bg-light">
</div>

<?php $body = ob_get_clean(); ?>
