<div class="container3">
        <div class="form-container3">
            <h1>EduPartage Inscription</h1>
            <form action="<?= route('Register') ?>" method="post" class="form">
                <div>
                    <label id="email_co1" for="nom">Nom:</label>
                    <input class="input" type="text" id="email_co2" name="lastname" required autocomplete="off" placeholder="email">
                </div>
                <div>
                    <label id="email_co1" for="nom">Prénom:</label>
                    <input class="input" type="text" id="email_co2" name="firstname" required autocomplete="off" placeholder="email">
                </div>
                <div>
                    <label id="email_co1" for="nom">Votre statut:</label>
                    <select id="menuder" name="statut">
                        <option value="">--Quel-est votre statut ? --</option>
                        <option value="1">Étudiant</option>
                        <option value="2">Professeur</option>
                    </select>    
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
                        <option value="">--Quel-est votre cursus ? --</option>
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
                    </select>
                </div>


               
                <div>
                    <label id="password_co1" >Ville:</label>
                    <select id="menuder" name="ville">
                        <option value="">--Choisissez votre ville--</option>
                        <option value="dog">Paris </option>
                        <option value="cat">Lyon </option>
                        <option value="hamster">Marseille</option>
                        <option value="parrot">Toulouse </option>
                        <option value="spider">Bordeaux</option>
                        <option value="goldfish">Strasbourg </option>
                        <option value="goldfish">Lille </option>   
                        <option value="goldfish">Grenoble </option>
                        <option value="goldfish">Montpellier </option>
                        <option value="goldfish">Rennes </option>
                    </select>
                </div>
                
                
                <button id="button_co"> M'inscrire</button>
            </form>
        </div>
        <div class="image-container3">
            <img src="public/images/4330385.png" alt="Image de taille moyenne">
        </div>
    </div>
