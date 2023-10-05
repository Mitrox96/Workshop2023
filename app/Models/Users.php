<?php
namespace App\Models;

class Users extends Model
{
    public function getAllUsers()
    {
        $db = $this->db();

        // Récupérer tous les utilisateurs
        $users = $db->query('SELECT * FROM users');
        return $users->fetchAll();
    }
}
