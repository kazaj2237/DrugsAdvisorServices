<?php
/**
 * Created by PhpStorm.
 * User: MAYA
 * Date: 07/05/2019
 * Time: 18:02
 */
require_once 'Tools/connect.php';
class Notification
{
    private  $idNotif;
    private  $titre;
    private  $message;
    private  $lien;
    private  $date;
    private  $heure;

    /**
     * @return mixed
     */
    public function getIdNotif()
    {
        return $this->idNotif;
    }

    /**
     * @param mixed $idNotif
     */
    public function setIdNotif($idNotif)
    {
        $this->idNotif = $idNotif;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * @param mixed $lien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
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

    public  function Get_notifications($idUtilisateur)
    {
        global  $pdo;
        $req=$pdo->prepare('SELECT n.idNotif,n.titre,n.message,n.lien,n.date,n.heure,u.idUtilisateur,u.nom
          FROM Notifications n JOIN Utilisateur U on n.UtilisateuridUtilisateur = U.idUtilisateur WHERE idUtilisateur=?');
        $req->execute([$idUtilisateur]);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }


}