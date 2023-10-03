<header>
    <div class="header">
        <div id="headerDiv">
            <div><a id="Home" href="<?= route(($_SESSION) ? 'Dashboard' : 'Accueil')?>">Acceuil</a></div>
        </div>
        <div id="pages">
            <div>
                <?php if(!$_SESSION): ?>
                    <a class="btn-header" id="Login" href="<?= route('Login')?>">Connexion</a>
                    <a class="btn-header" id="Register" href="<?= route('Register')?>">Inscription</a>
                <?php else: ?>
                    <a class="btn-header" href="<?= route('Accueil')?>"><i class="fa-solid fa-house"></i></a>
                <?php endif ?>
                <?php if($_SESSION): ?>
                    <div class="profil">
                        <i class="fa-solid fa-user"></i>
                        <div class="toggle-profil">
                            <li><a class="btn-profil" href="<?= route('Profil')?>"><i class="fa-regular fa-user"></i>Profil</a></li>
                            <hr>
                            <hr>
                            <li><a class="btn-profil" href="<?= route('Logout')?>"><i class="fa-solid fa-right-from-bracket"></i>Se déconnecter</a></li>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</header>