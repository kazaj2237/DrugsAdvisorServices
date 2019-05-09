<?php
/**
 * Created by PhpStorm.
 * User: Curtis NJIKI DJAPA P
 * Date: 07/05/2019
 * Time: 17:56
 */

require_once 'Tools/connect.php';

class Ville
{
    private $idVille;
    private $nom;

    /**
     * @return mixed
     */
    public function getIdVille()
    {
        return $this->idVille;
    }

    /**
     * @param mixed $idVille
     */
    public function setIdVille($idVille)
    {
        $this->idVille = $idVille;
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