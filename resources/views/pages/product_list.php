<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<header class="header-container">
    <a id="accueil-btn" class="button-primary" href="<?= route('ProductList')?>" >Accueil</a>
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
    <div>

<?php
// Function to display base64-encoded image
// Function to display base64-encoded image


// Function to display base64-encoded image

// Function to display image from BLOB data<?php
// Function to convert BLOB data to base64
function convertBlobToBase64($blobData) {
    return base64_encode($blobData);
}

 foreach ($materiel_cursus as $mat): ?>
        <div class="product_container">
            <?php
            // Convert BLOB data to base64
            $base64Image = convertBlobToBase64($mat->image);
            ?>
            <!-- Use the base64 image data directly in the img tag -->
            <img class="product_img" src="data:image/png;base64,<?= $base64Image ?>" alt="<?= $mat->description ?>">
            <div class="content">
                <h2 class="product_title"><? ?></h2>
                <!-- Assurez-vous de spécifier la clé correcte pour le prénom -->

                <p>
                    <?= $mat->description ?>
                </p>
                <a href="mailto:exemple@email.com" class="contact-button">Contactez-nous</a>
            </div>
        </div>
<?php endforeach; ?>



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

<script>
        // Écouteur d'événement pour détecter les changements dans la liste déroulante
        document.getElementById('cursus-dropdown').addEventListener('change', function () {
            // Récupérer la valeur sélectionnée
            var selectedValue = this.value;
            // Rediriger vers la nouvelle URL avec la valeur sélectionnée
            window.location.href = 'product_list?cursus=' + selectedValue;
        });
    </script>
</body>
</html>