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
        <option value="informatique">Sélectionner </option>
        <option value="mathematiques">Mathématiques</option>
        <option value="physique">Physique</option>
        <!-- Ajoutez d'autres options au besoin -->
    </select>
    <a href="#" id="profil-btn" class="button-image">
        <img class="icone" src="./././public/images/icone_user.png" alt="Image de profil">
    </a>

</header>

<body>

</body>

</html>