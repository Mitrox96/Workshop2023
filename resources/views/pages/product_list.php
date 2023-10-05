<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<header class="header-container">
    <a id="accueil-btn" class="button-primary" href="<?= route('Logout')?>" >Accueil</a>
    <select id="cursus-dropdown" class="button-primary">
        <option value=""><?= $monCursus ?></option>
        <?php foreach($cursus as $uncursus): ?>
           <option value="<?= $uncursus->id_cursus ?>"><?=$uncursus->libelle___annee ?> </option>
        <?php endforeach; ?>
        <!-- Ajoutez d'autres options au besoin -->
    </select>
    <a href="<?= route('Profil')?>" id="profil-btn" class="button-image">
        <img class="icone" src="./././public/images/icone_user.png" alt="Image de profil">
    </a>
    </header>
    <body>


    <div class="product_container">
    <img class="product_img" src="url_de_votre_image.jpg" alt="Image des pinceaux">
    <div class="content">
        <h2 class="product_title">Pinceaux</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec turpis vel elit viverra feugiat.
            Nulla facilisi. Integer fermentum auctor metus, in luctus libero feugiat nec.
        </p>
        <a href="mailto:exemple@email.com" class="contact-button">Contactez-nous</a>
    </div>
</div><div class="product_container">
    <img class="product_img" src="url_de_votre_image.jpg" alt="Image des pinceaux">
    <div class="content">
        <h2 class="product_title">Pinceaux</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec turpis vel elit viverra feugiat.
            Nulla facilisi. Integer fermentum auctor metus, in luctus libero feugiat nec.
        </p>
        <a href="mailto:exemple@email.com" class="contact-button">Contactez-nous</a>
    </div>
</div><div class="product_container">
    <img class="product_img" src="url_de_votre_image.jpg" alt="Image des pinceaux">
    <div class="content">
        <h2 class="product_title">Pinceaux</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec turpis vel elit viverra feugiat.
            Nulla facilisi. Integer fermentum auctor metus, in luctus libero feugiat nec.
        </p>
        <a href="mailto:exemple@email.com" class="contact-button">Contactez-nous</a>
    </div>
</div>
<div class="product_container">
    <img class="product_img" src="url_de_votre_image.jpg" alt="Image des pinceaux">
    <div class="content">
        <h2 class="product_title">Pinceaux</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec turpis vel elit viverra feugiat.
            Nulla facilisi. Integer fermentum auctor metus, in luctus libero feugiat nec.
        </p>
        <a href="mailto:exemple@email.com" class="contact-button">Contactez-nous</a>
    </div>
</div>

</body>
</html>