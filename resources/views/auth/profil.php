<header>
<a href="">Accueil</a>
<a href="">deco</a>
</header>
<section>
    <p>nom</p>
    <p>prenom</p>
    <p>email</p>
    <p>cursus</p>
    <p>ville</p>
    <p>ajout d'un article</p>
    <a href="<?= route('ModifProfil') ?>">Modifier mon profil</a>
</section>

<div id="cursus-dropdown" class="button-primary">
    <?php foreach($materiel as $monMatereil): ?>
        <div value=""><p><?= $monMatereil->image ?></p><p><?=$monMatereil->description ?></p> </div>
    <?php endforeach; ?>
</div>