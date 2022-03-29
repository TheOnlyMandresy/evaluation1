<?php ob_start(); ?>

<div class="donation-presentation bg-light h-50 pt-5">
    <div class="filter position-absolute"></div>
</div>

<div class="donation-why bg-light p-5">
    <h4 class="text-uppercase text-center py-3 mb-3">C'est pour la bonne cause</h4>
    <p class="mb-4 text-justify">En faisant un don, vous nous aiderez à nourrir les cerveaux sans gènes, ceux qui n'ont pas froid au yeux et qui oseront faire grimper en flèche la bourse dramatique.</p>

    <img src="/src/assets/img/business.png" class="card-img mb-4" alt="Business is business">

    <p class="mb-4 text-justify">Vous nous aiderez aussi à financer d'autres projets. Des projets qui ne sont pas de nous mais de personnes tout aussi motivées à l'idée d'apporter une aide au développement de ce monde dans lequel nous vivons tous.</p>
    
    <img src="/src/assets/img/kids.png" class="card-img mb-4" alt="Kids's brain">

    <p class="mb-0 text-justify">Vous nous aiderez aussi, a financé les projets scolaires des enfants qui n'ont pas la possibilité d'expérimenter assez de divertissement, comme leur faire visiter des lieu publics (zoo, musées, aquarium etc.) et leur permettre d'avoir une large palette de savoir afin d'augmenter drastiquement le taux de drama.</p>

    <div class="donation-give bg-light pt-3 mt-3 d-flex justify-content-center">
        <a href="https://don.breakpoverty.com/b/mon-don?cid=97&_cv=1" target="_blank" class="text-decoration-none">
            <p class="d-flex align-items-center fw-bold text-uppercase text-danger mb-0">Je donne
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
            </p>
        </a>
    </div>
</div>

<div class="donation-poor bg-secondary p-5">
    <h4 class="text-uppercase text-center pb-3 mb-3">T'es pauvre ?</h4>

    <p class="mb-0 text-justify">Si vous ne possédez pas le moindre centime, vous pouvez participer vous-même en créant davantage de drama dans votre entourage, <span class="fw-bold">n'ayez pas peur de leur faire mal ou de leur causer du tort. Si vous hésitez, la fin de l'espèce humaine sera sur votre dos.</span></p>
</div>

<?php $body = ob_get_clean(); ?>