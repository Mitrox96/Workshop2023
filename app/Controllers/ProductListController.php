<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;
use App\Models\Role;

class ProductListController extends Controller
{
    public function product_list()
    {

        //return view('pages.home', ['users' => $users]);
        return view('pages.product_list');
    }
}