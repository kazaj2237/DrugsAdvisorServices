<?php
/**
 * Created by PhpStorm.
 * User: Junior ZALE
 * Date: 07/05/2019
 * Time: 18:26
 */
require_once '../Tools/connect.php';
class Employe
{
  private $idEmploye;
  private $dateDebut;
  private $dateFin;

    /**
     * @return mixed
     */
    public function getIdEmploye()
    {
        return $this->idEmploye;
    }

    /**
     * @param mixed $idEmploye
     */
    public function setIdEmploye($idEmploye)
    {
        $this->idEmploye = $idEmploye;
    }

    /**
     * @return mixed
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param mixed $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param mixed $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }


}