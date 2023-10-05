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
                <input class="menuder" type="name" id="name" name="name" require autocomplete="off" >
            </div>

            <div>
                <label class="email_co1" for="email">Prénom</label>
                <input class="menuder" type="firstname" id="firstname" name="fisrtname" require autocomplete="off" >
            </div>
            <div>
                <label class="email_co1" for="email">Mail</label>
                <input class="input, email_co2" type="email" id="email" name="email" require autocomplete="off">
            </div>
            <div>
                <label class="password_co1" for="password">Mot de passe</label>
                <input class="input, password_co2" type="password" id="password" name="password" require autocomplete="off">
            </div>
            
            <div>
                    <label class="email_co1" >Cursus</label>
                    <select class="menuder" name="cursus" require>
                        <option value="">--Quel-est ton cursus ? --</option>
                        <?php foreach($cursus as $uncursus): ?>
                            <option value="<?= $uncursus->id_cursus ?>"><?=$uncursus->libelle___annee ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>

            <div>
                    <label class="email_co1" >Ville</label>
                    <select class="menuder" name="ville" require>
                        <?php foreach($ville as $uneville): ?>
                            <option value="<?= $uneville->id_ville ?>"><?=$uneville->nom_ville ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div><br>

                <div>
                    <button class="ajt"  id="ajout_artcl" name="ajout_d'article" require autocomplete="off">Ajout d'article</button>
                </div>

                <div>
                    <button onclick="<?= route('ModifProfil') ?>" class="ajt"  id="modif_prfl" name="modif_profil" require autocomplete="off">Modifiez votre profil</button>
                </div>

                 <a href="<?= route('ModifProfil') ?>">Modifier mon profil</a>

        </div>

    </div>
    <div id="cursus-dropdown" class="button-primary">
    <?php foreach($materiel as $monMatereil): ?>
        <div value=""><p><?= $monMatereil->image ?></p><p><?=$monMatereil->description ?></p> </div>
    <?php endforeach; ?>
</div>
    </div>

