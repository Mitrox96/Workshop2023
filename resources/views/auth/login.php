<div class="container3">
    <div class="form-container3">
        <h1>EduPartage Connexion</h1>
        <form action="<?= route('Login') ?>" method="post" class="form">
            <div>
                <label class="email_co1" for="email">Mail</label>
                <input class="input, email_co2" type="email" id="email" name="email" require autocomplete="off" placeholder="email">
            </div>
            <div>
                <label class="password_co1" for="password">Mot de passe</label>
                <input class="input, password_co2" type="password" id="password" name="password" require autocomplete="off" placeholder="mot de passe">
                <a class="password_co1" href="<?= route('Login') ?>?forgotpassword=true">Mot de passe oublié ?</a>
            </div>
            
            <div class="containerbutton">
                <div class="center-buttons"> <!-- Ajout d'un conteneur flex pour centrer les boutons -->
                    <button class="button_co">Me connecter</button>
                    <a onclick="window.location.href='<?= route('Register') ?>';" class="registerButton" style="background-color: transparent; color: blue; text-decoration: underline;">M'inscrire</a>
                </div>
            </div>
            <p><?= $error ==! '' ? $error : '' ?></p>
        </form>
    </div>
    <div class="image-container3">
        <img src="public/images/4330385.png" alt="Image de taille moyenne">
    </div>
</div>


<div id="toggle" class="toggle-contact <?php if($forgotpassword === true): ?>active<?php endif ?>">
    <i id="close" class="fa-solid fa-xmark"></i>
    <h3>Envoyer un mail de récupération</h3>
    <?php if($mail === false): ?>
        <p style="color:red"><?= $message ?></p>
    <?php endif ?>
    <?php if($mail !== true) { ?>
        <form action="<?= route('Login') ?>?forgotpassword=true&mail=true" method="post">
            <div style="width: 80%; margin:auto;" class="form-outline mb-4">
                <input type="email" name="mail" id="form4Example2" class="form-control" required />
                <label class="form-label" for="form4Example2">Votre Email</label>
            </div>
            <button type="submit" class="btn btn-primary mb-4">Envoyer mail</button>
        </form>
    <?php }else{ ?>
        <p>Un mail vous a été envoyé, veuillez vérifier votre boite mail</p>
    <?php } ?>
</div>
<div id="toggle-page" class="toggle-page <?php if($forgotpassword === true): ?>active<?php endif ?>"></div>

