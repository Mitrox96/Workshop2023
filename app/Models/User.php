<?php

namespace App\Models;
use PDO;
use DateTime;

class User extends Model
{
    public static function login($email, $mdp) {

        $db = self::db();
        $qry = "SELECT * FROM Utilisateur
            WHERE email = :email AND mot_de_passe = :mdp";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':email' => htmlentities($email),
            ':mdp' => hash('sha256', $mdp)
        ]);
        $user = $stt->fetch(\PDO::FETCH_ASSOC);

        if ($stt->rowCount() > 0) {

            foreach ($user as $key => $value) {
                $_SESSION[$key] = $value;
            }
            return true;
        }
        return false;
    }

    public static function checkMailAndPseudo($email, $prenom)
    {
        $db = self::db();
        $qry = "SELECT * FROM Utilisateur WHERE email = :email OR prenom = :prenom";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':email' => $email,
            ':prenom' => $prenom
        ]);
        
        return $stt->fetch(\PDO::FETCH_ASSOC) > 0 ? false : true;
    }

    public static function register($post)
    {
        $db = self::db();
        $qry = "INSERT INTO Utilisateur (nom, prenom, email, mot_de_passe, id_cursus, id_ville)
                VALUES (:nom, :prenom, :email, :mdp, :cursus, :ville)";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':nom' => htmlentities($post['nom']),
            ':prenom' => htmlentities($post['prenom']),
            ':email' => htmlentities($post['email']),
            ':mdp' => hash('sha256',$post['password']),
            ':cursus' => htmlentities($post['cursus']),
            ':ville' => htmlentities($post['ville'])

        ]);
        return true;
    }

    public static function update($id_utilisateur, $nom, $prenom, $email)
    {
        $db = self::db();
        $qry = "UPDATE Utilisateur SET nom = :nom,  prenom = :prenom, email = :email  WHERE id_utilisateur = :id_utilisateur AND";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':nom' => htmlentities($nom),
            ':prenom' => htmlentities($prenom),
            ':email' => htmlentities($email),
            ':id_joueur' => $id_joueur
        ]);
        $_SESSION['prenom'] = htmlentities($prenom);
        $_SESSION['email'] = htmlentities($email);
        return true;
    }

    public static function verifAskResetPassword($email) {
        $db = self::db();
        $qry = "SELECT token_recovery_password
                FROM Utilisateur
                WHERE email = :email";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':email' => htmlentities($email)
        ]);
        $token = $stt->fetchAll(\PDO::FETCH_ASSOC);
        if ($token[0]['token_recovery_password'] !== null) {
            $dateToken = self::checkDatePassword($email);
            $dateDay = new DateTime();
            $dateDay = $dateDay->format('Y-m-d H:i:s');
            $dateToken = $dateToken[0]['date_recovery_password'];
            
            if (datediff($dateDay,$dateToken) < 5000) {
                return false;
            }
        }
        return true;
    }

    public static function checkDatePassword($email) {
        $db = self::db();
        $qry = "SELECT date_recovery_password
                FROM Utilisateur
                WHERE email = :email";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':email' => $email,
        ]);
        return $stt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public static function InsertTokenDate($email, $token) {
        $db = self::db();
        $qry = "UPDATE Utilisateur
                SET token_recovery_password = :token_recovery_password, date_recovery_password = :date_recovery_password
                WHERE email = :email";
        $stt = $db->prepare($qry);
        $date = new \DateTime();
        $date =$date->format('Y-m-d-H-i-s');
        $stt->execute([
            ':token_recovery_password' => hash('sha256', $token),
            ':date_recovery_password' => $date,
            ':email' => $email
        ]);
    }

    public static function UserByToken($token) {
        $db = self::db();
        $qry = "SELECT * 
                FROM Utilisateur
                WHERE token_recovery_password = :token";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':token' => hash('sha256', $token)
        ]);
        return $stt->fetchAll(\PDO::FETCH_ASSOC);
    }


    public static function ResetPassword($post, $token) {
        $db = self::db();
        $qry = "UPDATE Utilisateur
                SET token_recovery_password = :token_recovery_password, 
                    date_recovery_password = :date_recovery_password, 
                    `mot_de_passe` = :mdp
                WHERE token_recovery_password = :token";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':token_recovery_password' => null,
            ':date_recovery_password' => null,
            ':mdp' => hash('sha256', $post['password']),
            ':token' => hash('sha256', $token)
        ]);
    }


    public static function VerifToken($token) {
        $db = self::db();
        $qry = "SELECT *
                FROM Utilisateur
                WHERE token_recovery_password = :token";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':token' => hash('sha256', $token)
        ]);
        $user = $stt->fetchAll(\PDO::FETCH_ASSOC);
        if($stt->rowCount() > 0) {
            $dateDay = new DateTime();
            $dateDay = $dateDay->format('Y-m-d H:i:s');
            $dateToken = $user[0]['date_recovery_password'];
            if (datediff($dateDay,$dateToken) < 5000) {
                return true;
            }
        }
        return false;
    }

    public static function getUtilisateur($id_utilisateur)
    {
        $db = self::db();
        $qry = "SELECT *
                FROM Utilisateur
                WHERE id_utilisateur = :id_utilisateur";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':id_utilisateur' => $id_utilisateur
        ]);
        return $stt->fetchAll(\PDO::FETCH_ASSOC);
    }
}