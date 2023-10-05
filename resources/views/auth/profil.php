<header class="header-container">
    <a id="accueil-btn" class="button-primary" href="<?= route('ProductList')?>" >Page Précédente</a>
    <a href="<?= route('Logout')?>" id="profil-btn" class="button-image">Deconnexion</a>
</header>
<section>
    <div>
        <p>nom</p>
        <p><?= $user[0]['nom'] ?></p>
    </div>
    <div>
        <p>prenom</p>
        <p><?= $user[0]['prenom'] ?></p>
    </div>
    <div>
        <p>email</p>
        <p><?= $user[0]['email'] ?></p>
    </div>
    <div>
        <p>cursus</p>
        <p><?= $monCursus ?></p>
    </div>
    <div>
        <p>ville</p>
        <p><?= $maVille ?></p>
    </div>
    <p>ajout d'un article</p>
    <a href="<?= route('ModifProfil') ?>">Modifier mon profil</a>
</section>

<div id="cursus-dropdown" class="button-primary">
    <?php foreach($materiel as $monMatereil): ?>
        <div value=""><p><?= $monMatereil->image ?></p><p><?=$monMatereil->description ?></p> </div>
    <?php endforeach; ?>
</div>