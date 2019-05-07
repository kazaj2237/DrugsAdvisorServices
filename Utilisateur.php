<?php
/**
 * Created by PhpStorm.
 * User: MAYA
 * Date: 07/05/2019
 * Time: 18:06
 */
    require_once  'Tools/connect.php';
class Utilisateur
{
    private $idUtilisateur;
    private $nom;
    private $prenom;
    private $sexe;
    private $email;
    private $motDePasse;

    /**
     * @return mixed
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param mixed $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param mixed $motDePasse
     */
    public function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }

    public  function  Add_user($nom,$prenom,$sexe,$email,$motDePasse)
    {
        global  $pdo;
        $req=$pdo->prepare('INSERT INTO Utilisateur (nom, prenom, sexe, email, motDePasse) VALUES (?,?,?,?,?)');
       return $req->execute([$nom,$prenom,$sexe,$email,$motDePasse]);
    }
    public function Login($email,$motDePasse)
    {
        global  $pdo;
        $req=$pdo->prepare('SELECT * FROM Utilisateur WHERE  email=? AND motDePasse=?');
        $req->execute([$email,$motDePasse]);
        return $req->fetch(PDO::FETCH_OBJ);
    }

    public  function Update_user($idUtilisateur)
    {
        global  $pdo;
        $req=$pdo->prepare('UPDATE Utilisateur SET nom=?, prenom=?,sexe=?,email=?,motDePasse=? WHERE idUtilisateur=?');
         return  $req->execute([$idUtilisateur]);
    }

}