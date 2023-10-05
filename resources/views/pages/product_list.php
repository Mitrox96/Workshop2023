<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<header class="header-container">
<button id="accueil-btn" class="button-primary">Accueil</button>
    <select id="cursus-dropdown" class="button-primary">
        <option value="">Quel-est ton cursus ? </option>
                        <option value="goldfish">Licence en Informatique - Première année</option>
                        <option value="goldfish">Licence en Informatique - Deuxième année </option>
                        <option value="goldfish">Licence en Informatique - Troisième année </option>
                        <option value="goldfish">Doctorat en Biologie Moléculaire - Première année</option>
                        <option value="goldfish">Doctorat en Biologie Moléculaire - Deuxième année</option>
                        <option value="goldfish">Doctorat en Biologie Moléculaire - Troisième année</option>
                        <option value="goldfish">Doctorat en Biologie Moléculaire - Quatrième année </option>
                        <option value="goldfish">Doctorat en Biologie Moléculaire - Cinquième année</option>
                        <option value="goldfish">Doctorat en Biologie Moléculaire - Sixième année</option>
                        <option value="goldfish">Doctorat en Biologie Moléculaire - Septième année</option>
                        <option value="goldfish">Doctorat en Biologie Moléculaire - Huitième année </option>
                        <option value="goldfish">Licence en Psychologie - Première année</option>
                        <option value="goldfish">Licence en Psychologie - Deuxième année</option>
                        <option value="goldfish">Licence en Psychologie - Troisième année</option>
                        <option value="goldfish">Master en Architecture - Première année</option>
                        <option value="goldfish">Master en Architecture - Deuxième année</option>
                        <option value="goldfish">Master en Architecture - Troisième année</option>
                        <option value="goldfish">Master en Architecture - Quatrième année </option>
                        <option value="goldfish">Master en Architecture - Cinquième année </option>
                        <option value="goldfish">Licence en Histoire de l'Art - Première année </option>
                        <option value="goldfish">Licence en Histoire de l'Art - Deuxième année</option>
                        <option value="goldfish">Licence en Histoire de l'Art - Troisième année</option>
                        <option value="goldfish">Doctorat en Médecine - Première année</option>
                        <option value="goldfish">Doctorat en Médecine - Deuxième année</option>
                        <option value="goldfish">Doctorat en Médecine - Troisième année</option>
                        <option value="goldfish">Doctorat en Médecine - Quatrième année</option>
                        <option value="goldfish">Doctorat en Médecine - Cinquième année</option>
                        <option value="goldfish">Doctorat en Médecine - Sixième année</option>
                        <option value="goldfish">Doctorat en Médecine - Septième année </option>
                        <option value="goldfish">Doctorat en Médecine - Huitième année </option>
                        <option value="goldfish">Doctorat en Médecine - Neuvième année </option>
                        <option value="goldfish">Doctorat en Médecine - Dixième année </option>
                        <option value="goldfish">Doctorat en Médecine - Onzième année </option>
        <!-- Ajoutez d'autres options au besoin -->
    </select>
    <a href="#" id="profil-btn" class="button-image">
        <img class="icone" src="./././public/images/icone_user.png" alt="Image de profil">
    </a>
    </header>
    <body>
    <?php foreach ($user as $users): ?>
            <li>
            <?php echo $user?>
            </li>
        <?php endforeach; ?>

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