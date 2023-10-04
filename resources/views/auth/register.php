<div class="container3">
        <div class="form-container3">
            <h1>EduPartage Inscription</h1>
            <form action="<?= route('Register') ?>" method="post" class="form">
                <div>
                    <label id="email_co1" for="nom">Nom:</label>
                    <input class="input" type="text" id="email_co2" name="nom" required autocomplete="off" placeholder="nom">
                </div>
                <div>
                    <label id="email_co1" for="nom">Prénom:</label>
                    <input class="input" type="text" id="email_co2" name="prenom" required autocomplete="off" placeholder="prenom">
                </div>
                <div>
                    <label id="email_co1" for="nom">Mail:</label>
                    <input class="input" type="email" id="email_co2" name="email" required autocomplete="off" placeholder="email">
                </div>
                <div>
                    <label id="password_co1" for="password">Mot de passe:</label>
                    <input class="input" type="password" id="password_co2" name="password" required autocomplete="off" placeholder="mot de passe">
                </div>
                <div>
                    <label id="password_co1" >Cursus</label>
                    <select id="menuder" name="cursus">
                        <option value="">--Quel-est ton cursus ? --</option>
                        <option value="1">Licence en Informatique - Première année</option>
                        <option value="2">Licence en Informatique - Deuxième année </option>
                        <option value="3">Licence en Informatique - Troisième année </option>
                        <option value="4">Doctorat en Biologie Moléculaire - Première année</option>
                        <option value="5">Doctorat en Biologie Moléculaire - Deuxième année</option>
                        <option value="6">Doctorat en Biologie Moléculaire - Troisième année</option>
                        <option value="7">Doctorat en Biologie Moléculaire - Quatrième année </option>
                        <option value="8">Doctorat en Biologie Moléculaire - Cinquième année</option>
                        <option value="9">Doctorat en Biologie Moléculaire - Sixième année</option>
                        <option value="10">Doctorat en Biologie Moléculaire - Septième année</option>
                        <option value="11">Doctorat en Biologie Moléculaire - Huitième année </option>
                        <option value="12">Licence en Psychologie - Première année</option>
                        <option value="13">Licence en Psychologie - Deuxième année</option>
                        <option value="14">Licence en Psychologie - Troisième année</option>
                        <option value="15">Master en Architecture - Première année</option>
                        <option value="16">Master en Architecture - Deuxième année</option>
                        <option value="17">Master en Architecture - Troisième année</option>
                        <option value="18">Master en Architecture - Quatrième année </option>
                        <option value="19">Master en Architecture - Cinquième année </option>
                        <option value="20">Licence en Histoire de l'Art - Première année </option>
                        <option value="21">Licence en Histoire de l'Art - Deuxième année</option>
                        <option value="22">Licence en Histoire de l'Art - Troisième année</option>
                        <option value="23">Doctorat en Médecine - Première année</option>
                        <option value="24">Doctorat en Médecine - Deuxième année</option>
                        <option value="25">Doctorat en Médecine - Troisième année</option>
                        <option value="26">Doctorat en Médecine - Quatrième année</option>
                        <option value="27">Doctorat en Médecine - Cinquième année</option>
                        <option value="28">Doctorat en Médecine - Sixième année</option>
                        <option value="29">Doctorat en Médecine - Septième année </option>
                        <option value="30">Doctorat en Médecine - Huitième année </option>
                        <option value="31">Doctorat en Médecine - Neuvième année </option>
                        <option value="32">Doctorat en Médecine - Dixième année </option>
                        <option value="33">Doctorat en Médecine - Onzième année </option>
                    </select>
                </div>


               
                <div>
                    <label id="password_co1" >Ville:</label>
                    <select id="menuder" name="ville">
                        <option value="">--Choisissez votre ville--</option>
                        <option value="1">Paris </option>
                        <option value="2">Lyon </option>
                        <option value="3">Marseille</option>
                        <option value="4">Toulouse </option>
                        <option value="5">Bordeaux</option>
                        <option value="6">Strasbourg </option>
                        <option value="7">Lille </option>   
                        <option value="8">Grenoble </option>
                        <option value="9">Montpellier </option>
                        <option value="10">Rennes </option>
                    </select>
                </div>
                
                
                <button id="button_co"> M'inscrire</button>
            </form>
        </div>
        <div class="image-container3">
            <img src="public/images/4330385.png" alt="Image de taille moyenne">
        </div>
    </div>
