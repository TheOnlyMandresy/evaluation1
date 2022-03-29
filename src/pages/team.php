<?php ob_start(); ?>

<div class="team-presentation bg-light h-50 pt-5">
    <div class="filter position-absolute"></div>
</div>

<div class="team-info bg-light p-5">
    <p class="mb-0 text-justify">La team <?= $website['title']; ?> comprend un grand équipage. Elle possède une forte équipe en interne, mais pas que. Des matelots tout aussi forts les uns que les autres, parés pour atteindre le graal.</p>
</div>

<div class="team-team bg-info p-5">
    <h4 class="text-light text-uppercase text-center pb-3 mb-3">En interne</h4>

    <div class="mb-3">
        <div class="card text-dark bg-light" style="max-width: 18rem;">
            <div class="card-header">Role</div>
            <img class="card-img-top" src="https://image.shutterstock.com/image-illustration/cartoon-kids-around-world-globe-260nw-591970034.jpg" />
            <div class="card-body text-dark">
                <h5 class="card-title">Name</h5>
                <p class="card-text">Description/Infos</p>
            </div>
        </div>
    </div>

    <h4 class="text-light text-uppercase text-center py-3 mb-3">Nos drama queens</h4>

    <div class="mb-3">
        <div class="card text-dark bg-light" style="max-width: 18rem;">
            <div class="card-header">Drama queen</div>
            <img class="card-img-top" src="https://image.shutterstock.com/image-illustration/cartoon-kids-around-world-globe-260nw-591970034.jpg" />
            <div class="card-body text-dark">
                <h5 class="card-title">Name</h5>
                <p class="card-text">Description/Infos</p>
            </div>
        </div>
    </div>

    <h4 class="text-light text-uppercase text-center pt-3 mb-0">Vous</h4>
</div>

<?php $body = ob_get_clean(); ?>