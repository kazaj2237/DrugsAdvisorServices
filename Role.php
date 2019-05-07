<?php
/**
 * Created by PhpStorm.
 * User: Junior ZALE
 * Date: 07/05/2019
 * Time: 18:36
 */
require_once '../Tools/connect.php';
class Role
{
    private $idRole;
    private $typeUtilisateur;

    /**
     * @return mixed
     */
    public function getIdRole()
    {
        return $this->idRole;
    }

    /**
     * @param mixed $idRole
     */
    public function setIdRole($idRole)
    {
        $this->idRole = $idRole;
    }

    /**
     * @return mixed
     */
    public function getTypeUtilisateur()
    {
        return $this->typeUtilisateur;
    }

    /**
     * @param mixed $typeUtilisateur
     */
    public function setTypeUtilisateur($typeUtilisateur)
    {
        $this->typeUtilisateur = $typeUtilisateur;
    }
    

}