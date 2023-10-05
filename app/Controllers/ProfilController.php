<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;

class ProfilController extends Controller
{
    public function __construct()
    {
        if(!$_SESSION) {
            redirect('Accueil');
        }
    }

    public function index()
    {

        $user = User::getUtilisateur($_SESSION['id_utilisateur']);
        $materiel = User::getMateriel($_SESSION['id_utilisateur']);
        $maVille = User::getMaVille($_SESSION['id_utilisateur']);
        $monCursus = User::getMonCursus($_SESSION['id_utilisateur']);
        $ville = User::getvilles();
        $cursus = User::getcursus();


        return view('auth.profil',[
            'materiel' => $materiel,
            'user' => $user,
            'maVille' => $maVille,
            'monCursus' => $monCursus,
            'ville' => $ville,
            'cursus' => $cursus,
        ]);
  
    }

    
    public function modifProfil()
    {
        $cursus = User::getCursus ();
        $ville = User::getVilles();


        return view('auth.modifProfil',[
            'cursus' => $cursus,
            'ville' => $ville,
        ]);
  
    
  
    }

}