<?php
/**
 * Created by PhpStorm.
 * User: Curtis NJIKI DJAPA P
 * Date: 07/05/2019
 * Time: 17:53
 */

require_once 'Tools/connect.php';

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
    function getDistanceBetweenPointsNew($latitude1, $longitude1, $latitude2, $longitude2) {
        $theta = $longitude1 - $longitude2;
        $miles = (sin(deg2rad($latitude1)) * sin(deg2rad($latitude2))) + (cos(deg2rad($latitude1)) * cos(deg2rad($latitude2)) * cos(deg2rad($theta)));
        $miles = acos($miles);
        $miles = rad2deg($miles);
        $miles = $miles * 60 * 1.1515;
        $kilometers = $miles * 1.609344;
        return compact('kilometers');
    }

    public function Get_Pharmacies($motCles,$positionUser,$distance){

        global  $pdo;

        $response = array();
        $compteur = 0;
        foreach ($this->Get_Pharmacie_All() as $values){
            if($this->getDistanceBetweenPointsNew($positionUser['lat'],$positionUser['lon'],$values['lattitude'],$values['longitude'])<= $distance)
            {
                $response[$compteur]=$values['idPharmacie'];
                $compteur++;
            }
        }
        $query=$pdo->prepare("SELECT * 
          FROM Pharmacie WHERE 
          INSTR(nom ,$motCles)> 0 AND idPharmacie in $response");
        $query->execute();
        return $query->fetchAll();
    }

    public function Get_Pharmacie_All(){
        global  $pdo;
        $query=$pdo->prepare("SELECT * FROM Pharmacie");
        $query->execute();
        return $query->fetchAll();
    }


    public function Get_Pharmacies_Profile($idpharmacie){

        global  $pdo;
        $query=$pdo->prepare("SELECT * 
          FROM Pharmacie WHERE $idpharmacie = idPharmacie ");
        $query->execute();
        return $query->fetchAll();
    }

}