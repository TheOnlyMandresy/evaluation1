<div class="events-incomming d-grid gap-3 p-3 border-bottom bg-dark accordion" id="latestsEvents">
    <?php for ($i = 0; $i < 3; $i++): ?>
    <div class="card text-white bg-dark shadow">
        <div class="card-header">Prochainement : <?= $incomming[$i]['date']; ?></div>

        <div class="accordion-item bg-dark overflow-hidden">
            <h5 id="HeadShowEvent<?= $i; ?>" class="card-title accordion-header">
                <button class="bg-dark text-white accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#showEvent<?= $i; ?>" aria-expanded="false" aria-controls="showEvent<?= $i; ?>">
                <?= $incomming[$i]['name']; ?>
                </button>
            </h5>
            
            <div id="showEvent<?= $i; ?>" class="card-text bg-light text-black accordion-collapse collapse" aria-labelledby="HeadShowEvent<?= $i; ?>">
                <div class="accordion-body">
                    <p><?= $incomming[$i]['infos']; ?></p>
                    <p class="text-muted mb-0"><?= $incomming[$i]['place']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php endfor; ?>

    <div class="more d-flex flex-column justify-content-center align-items-center">
        <a href="/events">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-calendar4-event text-info" viewBox="0 0 16 16">
        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
        <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
        </svg>
        </a>
    </div>
</div>