<?php ob_start(); ?>

<div class="team-presentation bg-light h-50 pt-5">
    <div class="filter position-absolute"></div>
</div>

<div class="team-info bg-info p-5">
    <p class="mb-0 text-justify">La team <?= $website['title']; ?> comprend un grand équipage. Elle possède une forte équipe en interne, mais pas que. Des matelots tout aussi forts les uns que les autres, parés pour atteindre le graal.</p>
</div>

<div class="team-all bg-light p-5">
    <h4 class="text-uppercase text-center pb-3 mb-3">En interne</h4>

    <div class="cards mb-3">
        <div class="toSlide d-flex gap-3">
            <?php foreach ($team as $data): ?>
                <div class="card bg-light overflow-hidden">
                    <div class="img overflow-hidden d-flex align-items-center justify-content-center">
                        <img src="<?= $data['profil']; ?>" class="card-img-top" alt="<?= $data['firstName']; ?>">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title"><?= $data['firstName']; ?> <?= $data['lastName']; ?></h5>
                        <p class="card-text text-muted"><?= $data['role']; ?></p>
                        <p class="card-text fs-6">Contacts <br> <?= $data['contact']['email']; ?> <br> (<?= $data['contact']['countryCode']; ?>) <?= $data['contact']['number']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <h4 class="text-uppercase text-center py-3 mb-3">Nos drama queens</h4>

    <div class="cards mb-3">
        <div class="toSlide d-flex gap-3">
            <?php foreach ($queens as $data): ?>
            <div class="card bg-light overflow-hidden">
                <div class="img overflow-hidden d-flex align-items-center justify-content-center">
                    <img src="<?= $data['profil']; ?>" class="card-img-top" alt="<?= $data['firstName']; ?>">
                </div>

                <div class="card-body">
                    <h5 class="card-title"><?= $data['firstName']; ?> <?= $data['lastName']; ?></h5>
                    <p class="card-text text-muted"><?= $data['age']; ?> Ans</p>
                    <p class="card-text fs-6"><?= $data['quote']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <h4 class="text-uppercase text-center pt-3 mb-0">Et vous !</h4>
</div>

<?php $body = ob_get_clean(); ?>