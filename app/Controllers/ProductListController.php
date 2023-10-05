<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;
use App\Models\Role;

class ProductListController extends Controller
{

    public function __construct()
    {
        if(!$_SESSION) {
            redirect('Accueil');
        }
    }

    public function product_list()
    {

        if ($_POST){
            if (isset($_POST['email']) && $_POST['email'] !== '' ||
                isset($_POST['prenom']) && $_POST['prenom'] !== '') {
                    User::update($_SESSION['id_utilisateur'] ,$_POST['nom'], $_POST['prenom'],$_POST['email']);
            }
        }

        $cursus = User::getCursus();
        $monCursus = User::getMonCursus($_SESSION['id_utilisateur']);
        $utilisateur = User::getUtilisateur($_SESSION['id_utilisateur']);
        $materiel_cursus = User::getMaterielForCursus($_SESSION['id_cursus']);

         return view('pages.product_list', [
            'monCursus' => $monCursus,
            'cursus' => $cursus,
            'materiel_cursus' => $materiel_cursus,
            'utilisateur' => $utilisateur
        ]);
    }
}