<?php
/**
 * Created by PhpStorm.
 * User: KAMSU
 * Date: 07/05/2019
 * Time: 17:36
 */
require_once 'Tools/connect.php';

class Prise_Medicament
{
    private $idPrise;
    private $nom;
    private $date;
    private $heure;
    private $quantite;
    private $uniteQuantite;

    /**
     * @return mixed
     */
    public function getIdPrise()
    {
        return $this->idPrise;
    }

    /**
     * @param mixed $idPrise
     */
    public function setIdPrise($idPrise)
    {
        $this->idPrise = $idPrise;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param mixed $heure
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;
    }

    /**
     * @return mixed
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * @param mixed $quantite
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getUniteQuantite()
    {
        return $this->uniteQuantite;
    }

    /**
     * @param mixed $uniteQuantite
     */
    public function setUniteQuantite($uniteQuantite)
    {
        $this->uniteQuantite = $uniteQuantite;
    }

    public function GetPrise($idUser, $idTraitement)
    {
        global  $pdo;
        $req=$pdo->prepare("SELECT * FROM Prise_Medicament p JOIN Traitement t ON p.TraitementidTraitement = t.idTraitement JOIN Utilisateur u ON u.idUtilisateur = t.UtilisateuridUtilisateur WHERE t.idTraitement = $idTraitement AND u.idUtilisateur = $idUser ");
            $req->execute();
            return $req->fetchAll();


    }

}