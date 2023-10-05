<header class="header-container">
    <a id="accueil-btn" class="button-primary" href="<?= route('Profil')?>" >Page Précédente</a>
    <a href="<?= route('Logout')?>" id="profil-btn" class="button-image">Deconnexion</a>
</header>

<h2 class="email_co1">Modification de vos informations personnelles</h2>
    <form method="POST" action="<?= route('Profil') ?>">

        <label class="email_co1" for="newEmail"> Nouveau mail :</label>
        <input type="email" class="menuder" name="newEmail" value="<?= $user[0]['email'] ?>"><br>

        <label class="email_co1" for="newPassword"> Nouveau mot de passe :</label>
        <input class="menuder" type="password" name="newPassword"><br>

        <label class="email_co1" >Cursus</label>
            <select class="menuder" name="cursus" require>
                <option value=""><?= $monCursus ?></option>
                <?php foreach($cursus as $uncursus): ?>
                    <option value="<?= $uncursus->id_cursus ?>"><?=$uncursus->libelle___annee ?> </option>
                <?php endforeach; ?>
            </select>

        <label class="email_co1" >Ville</label>
            <select class="menuder" name="ville" require>
                <?php foreach($ville as $uneville): ?>
                    <option value="<?= $uneville->id_ville ?>"><?=$uneville->nom_ville ?> </option>
                <?php endforeach; ?>
            </select><br><br>

        <input class="menuder" type="submit" value="Mettre à jour">
    </form>