<?php 

use App\Models\User;

?>
<div class="container5">
<h1>Profil Utilisateur</h1>

<form>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"><br><br>

    <label for="motDePasse">Mot de passe :</label>
    <input type="password" id="motDePasse" name="motDePasse"><br><br>

    <label for="mail">Adresse E-mail :</label>
    <input type="email" id="mail" name="mail"><br><br>

    <label for="cursus">Cursus :</label>
    
    <select id="cursus" name="cursus">
        <option value="cursus1">
    <?php

        $cursusList = User::cursusFromSession();
    if ($cursusList) { 
        // Vérifiez si $cursusList n'est pas nul
        // Boucle pour générer les options
        foreach ($cursusList as $cursus) {
            echo "<option value='" . $cursus['id_cursus'] . "'>" . $cursus['libelle_annee'] . "</option>";
        }
    } else {
        // Gérez le cas où $cursusList est nul (par exemple, affichez un message d'erreur)
        echo "<option value=''>Aucun cursus disponible</option>";
    }
    ?>
    </option>
    
    </select>
    <button type="button" id="changerCursus">Changer Cursus</button><br><br>

    <label for="fichier">Ajouter un fichier :</label>
    <input type="file" id="fichier" name="fichier"><br><br>
    <label for="fichier">Liste des ajouts :</label><br><br>
    <p>efzzzzzzzzzzzzzezffzefzeezef</p>

    <button type="submit">Enregistrer</button>
</form>


</div>
