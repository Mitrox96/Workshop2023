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

        $materiel = User::getMateriel($_SESSION['id_utilisateur']);


        return view('auth.profil',[
            'materiel' => $materiel
        ]);
  
    }

    public function modifProfil()
    {
        
        return view('auth.modifProfil');
  
    }

}