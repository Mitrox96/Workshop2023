<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Users;
use App\Models\Role;
use App\Models\Model;
class ProductListController extends Controller
{
    public function product_list()
    {
        
        $users_model = new Users();

        // Récupérer tous les utilisateurs depuis le modèle
        $users = $users_model->getAllUsers();

        // Retourner la vue avec les données
        return view('pages.product_list', ['users' => $users]);
        
    }
}