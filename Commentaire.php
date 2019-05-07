<?php
/**
 * Created by PhpStorm.
 * User: KAMSU
 * Date: 07/05/2019
 * Time: 17:24
 */
require_once 'Tools/connect.php';

class Commentaire
{
    private $idCommentaire;
    private $libelle;
    private $description;

    /**
     * @return mixed
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * @param mixed $idCommentaire
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;
    }

    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function addComment($idPharmacie, $commentaire, $idUser, $libelle)
    {
        global  $pdo;

            $req=$pdo->prepare("INSERT INTO Commentaire (libelle, description, UtilisateuridUtilisateur, PharmacieidPharmacie)
values ($libelle, $commentaire, $idUser, $idPharmacie) ");

            $req->execute();

    }



}