<header class="header-container">
    <a id="accueil-btn" class="button-primary" href="<?= route('ProductList')?>" >Page Précédente</a>
    <a href="<?= route('Logout')?>" id="profil-btn" class="button-primary">Deconnexion</a>
</header>

<div class="container3">
    <div class="form-container4">
        <h1>EduPartage <span> Profil</span></h1>
        <div action="<?= route('Profil') ?>" method="post" class="form">
            <div>
                <label class="email_co1" for="email">Nom</label>
                <p class="menuder"><?= $user[0]['nom'] ?></p>
            </div>

            <div>
                <label class="email_co1" for="email">Prénom</label>
                <p class="menuder"><?= $user[0]['prenom'] ?></p>
            </div>
            <div>
                <label class="email_co1" for="email">Mail</label>
                <p class="menuder"<?= $user[0]['email'] ?>></p>
            </div>
            
            <div>
                <label class="email_co1" >Cursus</label>
                <p class="menuder"><?= $monCursus ?></p>
            </div>

            <div>
                <label class="email_co1" >Ville</label>
                <p class="menuder"><?= $maVille ?></p>
                </div><br>

                <div>
                    <button class="ajt"  id="ajout_artcl" name="ajout_d'article" require autocomplete="off"><a href="<?= route('AddMateriel') ?>">Ajout d'article</a></button>
                </div>

                <div>
                    <button class="ajt"  id="modif_prfl" name="modif_profil" require autocomplete="off"><a href="<?= route('ModifProfil') ?>">Modifiez votre profil</a></button>
                </div>


        </div>

    </div>
    <div id="cursus-dropdown" class="button-primary">
    <?php foreach($materiel as $monMatereil): ?>
        <div value=""><p><?= $monMatereil->image ?></p><p><?=$monMatereil->description ?></p> </div>
    <?php endforeach; ?>
</div>
    </div>

