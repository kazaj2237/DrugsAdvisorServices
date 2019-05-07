<?php
/**
 * Created by PhpStorm.
 * User: MAYA
 * Date: 07/05/2019
 * Time: 17:22
 */

class Medicament
{
    private $idMedicament;
    private $Nom;
    private $Caractéristiques;
    private $notice;

    /**
     * @return mixed
     */
    public function getIdMedicament()
    {
        return $this->idMedicament;
    }

    /**
     * @param mixed $idMedicament
     */
    public function setIdMedicament($idMedicament)
    {
        $this->idMedicament = $idMedicament;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->Nom;
    }

    /**
     * @param mixed $Nom
     */
    public function setNom($Nom)
    {
        $this->Nom = $Nom;
    }

    /**
     * @return mixed
     */
    public function getCaractéristiques()
    {
        return $this->Caractéristiques;
    }

    /**
     * @param mixed $Caractéristiques
     */
    public function setCaractéristiques($Caractéristiques)
    {
        $this->Caractéristiques = $Caractéristiques;
    }

    /**
     * @return mixed
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * @param mixed $notice
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;
    }

}