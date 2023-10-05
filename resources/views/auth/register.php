<div class="container3">
        <div class="form-container3">
            <h1>EduPartage<span>Inscription</span></h1>
            <form action="<?= route('Register') ?>" method="post" class="form">
                <div>
                    <label class="email_co1" for="nom">Nom:</label>
                    <input class="input, email_co2" type="text" name="nom" required autocomplete="off" placeholder="nom">
                </div>
                <div>
                    <label class="email_co1" for="prenom">Prénom:</label>
                    <input class="input, email_co2" type="text" name="prenom" required autocomplete="off" placeholder="prenom">
                </div>
                <div>
                    <label class="email_co1" for="email">Mail</label>
                    <input class="input, email_co2" type="email" name="email" required autocomplete="off" placeholder="email">
                </div>
                <div>
                    <label class="email_co1" for="password">Mot de passe:</label>
                    <input class="input, password_co2" type="password" name="password" required autocomplete="off" placeholder="mot de passe">
                </div>
                <div>
                    <label class="email_co1" for="role" require>Votre statut</label>
                    <select class="menuder" name="role">
                        <option value="">--Quel-est votre statut ? --</option>
                        <?php foreach($role as $unrole): ?>
                            <option value="<?= $unrole->id_role ?>"><?=$unrole->libelle ?> </option>
                        <?php endforeach; ?>
                    </select>    
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
                </div>
            
                <button class="button_co"> M'inscrire</button>

                <p><?= $error ==! '' ? $error : '' ?></p>
            </form>
        </div>
        <div class="image-container3">
            <img src="public/images/4330385.png" alt="Image de taille moyenne">
        </div>
    </div>
