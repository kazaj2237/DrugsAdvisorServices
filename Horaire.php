<?php
/**
 * Created by PhpStorm.
 * User: RUTHEL PC
 * Date: 07/05/2019
 * Time: 17:25
 */

class Horaire
{
    private $idHoraire;
    private $jourSemaine;
    private $heureOuverture;
    private $heureFermeture;
    private $debutValidite;
    private $finValidite;
    private $estDeGarde;

    /**
     * @return mixed
     */
    public function getIdHoraire()
    {
        return $this->idHoraire;
    }

    /**
     * @param mixed $idHoraire
     */
    public function setIdHoraire($idHoraire)
    {
        $this->idHoraire = $idHoraire;
    }

    /**
     * @return mixed
     */
    public function getJourSemaine()
    {
        return $this->jourSemaine;
    }

    /**
     * @param mixed $jourSemaine
     */
    public function setJourSemaine($jourSemaine)
    {
        $this->jourSemaine = $jourSemaine;
    }

    /**
     * @return mixed
     */
    public function getHeureOuverture()
    {
        return $this->heureOuverture;
    }

    /**
     * @param mixed $heureOuverture
     */
    public function setHeureOuverture($heureOuverture)
    {
        $this->heureOuverture = $heureOuverture;
    }

    /**
     * @return mixed
     */
    public function getHeureFermeture()
    {
        return $this->heureFermeture;
    }

    /**
     * @param mixed $heureFermeture
     */
    public function setHeureFermeture($heureFermeture)
    {
        $this->heureFermeture = $heureFermeture;
    }

    /**
     * @return mixed
     */
    public function getDebutValidite()
    {
        return $this->debutValidite;
    }

    /**
     * @param mixed $debutValidite
     */
    public function setDebutValidite($debutValidite)
    {
        $this->debutValidite = $debutValidite;
    }

    /**
     * @return mixed
     */
    public function getFinValidite()
    {
        return $this->finValidite;
    }

    /**
     * @param mixed $finValidite
     */
    public function setFinValidite($finValidite)
    {
        $this->finValidite = $finValidite;
    }

    /**
     * @return mixed
     */
    public function getEstDeGarde()
    {
        return $this->estDeGarde;
    }

    /**
     * @param mixed $estDeGarde
     */
    public function setEstDeGarde($estDeGarde)
    {
        $this->estDeGarde = $estDeGarde;
    }

    public  function setHoraire($idHoraire, $jourSemaine,$heureOuverture, $heureFermeture, $debutValidite, $finValidite, $estDeGarde, $PharmacieidPharmacie){
        global  $pdo;
        $req=$pdo->prepare("INSERT INTO Horaire (idHoraire, jourSemaine, heureOuverture, heureFermeture, debutValidite, finValidite, estDeGarde, PharmacieidPharmacie)
        values ($idHoraire, $jourSemaine, $heureOuverture, $heureFermeture, $debutValidite, $finValidite, $estDeGarde, $PharmacieidPharmacie)");
        $req->execute();
        return $req->fetchAll();
    }

}