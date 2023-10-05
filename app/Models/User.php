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
        $qry = "SELECT * FROM Utilisateur WHERE email = :email AND prenom = :prenom";
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
        $qry = "INSERT INTO Utilisateur (nom, prenom, email, mot_de_passe, id_cursus, id_ville, id_role)
                VALUES (:nom, :prenom, :email, :mdp, :cursus, :ville, :role)";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':nom' => htmlentities($post['nom']),
            ':prenom' => htmlentities($post['prenom']),
            ':email' => htmlentities($post['email']),
            ':mdp' => hash('sha256',$post['password']),
            ':cursus' => htmlentities($post['cursus']),
            ':ville' => htmlentities($post['ville']),
            ':role' => htmlentities($post['role'])

        ]);
        return true;
    }

    public static function update($id_utilisateur, $nom, $prenom, $email, $cursus, $ville)
    {
        $db = self::db();
        $qry = "UPDATE Utilisateur SET nom = :nom,  prenom = :prenom, email = :email, cursus = :cursus, ville = :ville  WHERE id_utilisateur = :id_utilisateur";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':nom' => htmlentities($nom),
            ':prenom' => htmlentities($prenom),
            ':email' => htmlentities($email),
            ':cursus' => htmlentities($cursus),
            ':ville' => htmlentities($ville),
            ':id_utilisateur' => $id_utilisateur
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



        $user = $stt->fetchAll(PDO::FETCH_ASSOC);
        return $user;

    }

    public static function getVilles()
    {
        $db = self::db();
        $qry = "SELECT *
                FROM Ville";
        $stt = $db->prepare($qry);
        $stt->execute();
        $ville = $stt->fetchAll(PDO::FETCH_OBJ);
        return $ville;
    }

    public static function getMaVille($id_utilisateur)
    {
        $db = self::db();
        $qry = "SELECT V.nom_ville
                FROM Ville V
                INNER JOIN Utilisateur U ON V.id_ville = U.id_ville
                WHERE U.id_utilisateur = :id_utilisateur";
        $stt = $db->prepare($qry);
        $stt->bindParam(':id_utilisateur', $id_utilisateur, PDO::PARAM_INT);
        $stt->execute();
        $maVille = $stt->fetchColumn();
        return $maVille;
    }

    public static function getCursus()
    {
        $db = self::db();
        $qry = "SELECT *
                FROM Cursus";
        $stt = $db->prepare($qry);
        $stt->execute();
        $cursus = $stt->fetchAll(PDO::FETCH_OBJ);
        return $cursus;
    }

    public static function getMonCursus($id_utilisateur)
    {
        $db = self::db();
        $qry = "SELECT libelle___annee
                FROM Cursus
                WHERE Cursus.id_cursus = (SELECT id_cursus FROM Utilisateur WHERE id_utilisateur = :id_utilisateur)";
        $stt = $db->prepare($qry);
        $stt->bindParam(':id_utilisateur', $id_utilisateur, PDO::PARAM_INT);
        $stt->execute();
        $monCursus = $stt->fetchColumn();
        return $monCursus;
    }
    
    public static function getRoles()
    {
        $db = self::db();
        $qry = "SELECT *
                FROM Role";
        $stt = $db->prepare($qry);
        $stt->execute();
        $role = $stt->fetchAll(PDO::FETCH_OBJ);
        return $role;

    }
    public static function getMateriel($id_utilisateur)
    {
        $db = self::db();
        $qry = "SELECT description, image
                FROM Materiel 
                INNER JOIN emprunt ON Materiel.id_materiel = emprunt.id_materiel
                INNER JOIN Utilisateur ON emprunt.id_utilisateur = Utilisateur.id_utilisateur
                WHERE Utilisateur.id_utilisateur = :id_utilisateur";
        $stt = $db->prepare($qry);
        $stt->bindParam(':id_utilisateur', $id_utilisateur, PDO::PARAM_INT);
        $stt->execute();
        $materiel = $stt->fetchAll(PDO::FETCH_ASSOC);
        return $materiel;
    }

    public static function addProduct($id_utilisateur, $image, $description, $cursus)
    {
        $db = self::db();
        $qry = "UPDATE Materiel SET image = :image,  description = :description, id_cursus = :cursus, id_utilisateur = :id_utilisateur";
        $stt = $db->prepare($qry);
        $stt->execute([
            ':image' => htmlentities($image),
            ':description' => htmlentities($description),
            ':cursus' => htmlentities($cursus),
            ':id_utilisateur' => $id_utilisateur
        ]);
        return true;
 
}
public static function getMaterielForCursus($cursus_id)
{
    $db = self::db();
    $qry = "SELECT description, image
            FROM Materiel 
            INNER JOIN Cursus ON Materiel.id_cursus = Cursus.id_cursus
            WHERE Cursus.id_cursus = :id_cursus";
    $stt = $db->prepare($qry);
    $stt->bindParam(':id_cursus', $cursus_id, PDO::PARAM_INT);
    $stt->execute();
    $materiel_cursus = $stt->fetchAll(PDO::FETCH_OBJ);
    return $materiel_cursus;
    }
}