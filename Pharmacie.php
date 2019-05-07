<?php
/**
 * Created by PhpStorm.
 * User: Curtis NJIKI DJAPA P
 * Date: 07/05/2019
 * Time: 17:53
 */

class Pharmacie
{
    private  $idPharmacie;
    private $nom;
    private $numeroTel;
    private $image;
    /**
     * @return mixed
     */
    public function getIdPharmacie()
    {
        return $this->idPharmacie;
    }

    /**
     * @param mixed $idPharmacie
     */
    public function setIdPharmacie($idPharmacie)
    {
        $this->idPharmacie = $idPharmacie;
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
    public function getNumeroTel()
    {
        return $this->numeroTel;
    }

    /**
     * @param mixed $numeroTel
     */
    public function setNumeroTel($numeroTel)
    {
        $this->numeroTel = $numeroTel;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}