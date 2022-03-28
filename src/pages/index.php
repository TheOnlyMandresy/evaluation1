<?php ob_start(); ?>

<div class="index-landing py-5 text-center text-white">
    <div class="logo-XL mb-3"></div>
    <h1>Le monde n'est pas assez triste</h1>
    <p>- <?= $website['title']; ?></p>
</div>

<div class="index-events p-3 border-bottom bg-dark">
    <div class="bg-light border rounded-3">
    <br><br><br><br><br><br><br><br><br><br>
    </div>

    <div class="bg-light border rounded-3">
    <br><br><br><br><br><br><br><br><br><br>
    </div>
</div>



<?php $body = ob_get_clean(); ?>