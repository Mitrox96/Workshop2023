<header class="header-container">
    <a id="accueil-btn" class="button-primary" href="<?= route('Profil')?>" >Page Précédente</a>
    <a href="<?= route('Logout')?>" id="profil-btn" class="button-image">Deconnexion</a>
</header>
<h2 class="email_co1">Ajouter un article</h2>
    <form method="POST" action="<?= route('Profil') ?>">

        <label class="email_co1" for="image"> Choisir votre image</label>
        <input class="menuder" type="file" name="image"><br>

        <label class="email_co1" for="a"> Entrer la description de l'article</label>
        <input class="menuder" type="textarea" name="description"><br>

        <label class="email_co1" >Selectioner un Cursus</label>
            <select class="menuder" name="cursus" require>
                <option value=""><?= $monCursus ?></option>
                <?php foreach($cursus as $uncursus): ?>
                    <option value="<?= $uncursus->id_cursus ?>"><?=$uncursus->libelle___annee ?> </option>
                <?php endforeach; ?>
            </select>

        <input class="menuder" type="submit" value="Ajouter l'article">
    </form>