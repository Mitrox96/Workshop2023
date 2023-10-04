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
        if ($_POST){
            if (isset($_POST['email']) && $_POST['email'] !== '' ||
                isset($_POST['prenom']) && $_POST['prenom'] !== '') {
                    User::update($_SESSION['id_utilisateur'] ,$_POST['prenom'], $_POST['email']);
            }
        }
  
    }


}