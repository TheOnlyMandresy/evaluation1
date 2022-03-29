<?php ob_start(); ?>

<div class="index-landing bg-dark d-flex gap-3 p-3 mx-auto flex-column justify-content-center h-100 py-5 text-center text-white">
    <div class="logo-XL mb-3"></div>
    <h1>Le monde n'est pas assez triste</h1>
    <p>- <?= $website['title']; ?></p>
</div>

<?php require_once 'events/incomming.php'; ?>

<div class="index-about bg-light p-5">
    <h4 class="text-uppercase text-center pb-3 mb-3">Le drama est-ce bien ?</h4>
    <p class="mb-4 text-justify">Notre slogan vous le dit, « Le monde n'est pas assez triste » ! Alors oui c'est bien.</p>
    <p class="mb-4 text-justify">Je sais ce que vous allez nous dire, si ça rend davantage triste c'est que ce n'est pas bien, car <span class="fw-bold">tristesse = peine et peine = négatif et négatif = péjoratif et péjoratif = mal</span>. Et c'est là que vous avez tout faux, car la tristesse est parfois une étape par laquelle <span class="fw-bold">nous devons passer pour pouvoir devenir plus fort.</span></p>
    <p class="mb-4 text-justify">En accablant le monde d'une overdose de drama, cela créera une dépression mondiale et générale. Pour la première fois dans des statistiques de recherches psychologiques le pourcentage sera unanime (100% des cas) et l'Homme réalisera qu'ils sont tous les mêmes. C'est ainsi que nous pourrons changer la balance et éveiller les esprits endormi pour entrer dans un nouvel ère qui sera bien plus positive que tout le mal occasionné.</p>
    
    <div>
    <a href="/us" class="text-decoration-none">
        <p class="d-flex align-items-center fw-bold text-uppercase text-info mb-0 text-center">En savoir plus
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        </p>
    </a>
    </div>
</div>

<div class="index-donation bg-light p-5">
    <h4 class="text-uppercase text-center pb-3 mb-3">Faites un don</h4>
    <p class="text-center mb-4">En faisant un don, vous nous aiderez à nourrir les cerveaux sans gènes, ceux qui n'ont pas froid au yeux et qui oseront faire grimper en flèche la bourse dramatique.</p>
    <div class="d-flex gap-3 justify-content-center align-items-center">
        <a href="/donation">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-info-square text-info" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
            </svg>
        </a>
        <a href="https://don.breakpoverty.com/b/mon-don?cid=97&_cv=1" target="_blank" class="text-decoration-none">
            <p class="d-flex align-items-center fw-bold text-uppercase text-danger mb-0">Je donne
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
            </p>
        </a>
    </div>
</div>

<?php $body = ob_get_clean(); ?>
