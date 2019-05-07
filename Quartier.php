<?php
/**
 * Created by PhpStorm.
 * User: RUTHEL PC
 * Date: 07/05/2019
 * Time: 17:35
 */
require_once '../Tools/connect.php';
class Quartier
{
    private $idQuartier;
    private $nom;

    /**
     * @return mixed
     */
    public function getIdQuartier()
    {
        return $this->idQuartier;
    }

    /**
     * @param mixed $idQuartier
     */
    public function setIdQuartier($idQuartier)
    {
        $this->idQuartier = $idQuartier;
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
}