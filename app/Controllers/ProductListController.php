<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Users;
use App\Models\Role;
use App\Models\Model;
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
        
        $users_model = new Users();

<<<<<<< HEAD
        // Récupérer tous les utilisateurs depuis le modèle
        $users = $users_model->getAllUsers();

        // Retourner la vue avec les données
        return view('pages.product_list', ['users' => $users]);
        
=======
        if ($_POST){
            if (isset($_POST['email']) && $_POST['email'] !== '' ||
                isset($_POST['prenom']) && $_POST['prenom'] !== '') {
                    User::update($_SESSION['id_utilisateur'] ,$_POST['nom'], $_POST['prenom'],$_POST['email']);
            }
        }

        $cursus = User::getCursus();
        $monCursus = User::getMonCursus($_SESSION['id_utilisateur']);

         return view('pages.product_list', [
            'monCursus' => $monCursus,
            'cursus' => $cursus,
        ]);
>>>>>>> 6d253ab4972f294e8c4200c2e416eb7a81db983b
    }
}