<?php
/**
 * Created by PhpStorm.
 * User: MAYA
 * Date: 07/05/2019
 * Time: 17:31
 */

class Traitement
{
    private $idTraitement;
    private $libelle;
    private $duree;
    private $uniteDuree;
    private $frequenceRappel;
    private $uniteFrequence;

    /**
     * @return mixed
     */
    public function getIdTraitement()
    {
        return $this->idTraitement;
    }

    /**
     * @param mixed $idTraitement
     */
    public function setIdTraitement($idTraitement)
    {
        $this->idTraitement = $idTraitement;
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
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getUniteDuree()
    {
        return $this->uniteDuree;
    }

    /**
     * @param mixed $uniteDuree
     */
    public function setUniteDuree($uniteDuree)
    {
        $this->uniteDuree = $uniteDuree;
    }

    /**
     * @return mixed
     */
    public function getFrequenceRappel()
    {
        return $this->frequenceRappel;
    }

    /**
     * @param mixed $frequenceRappel
     */
    public function setFrequenceRappel($frequenceRappel)
    {
        $this->frequenceRappel = $frequenceRappel;
    }

    /**
     * @return mixed
     */
    public function getUniteFrequence()
    {
        return $this->uniteFrequence;
    }

    /**
     * @param mixed $uniteFrequence
     */
    public function setUniteFrequence($uniteFrequence)
    {
        $this->uniteFrequence = $uniteFrequence;
    }

    

}