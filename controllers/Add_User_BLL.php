<?php
require_once '../Utilisateur.php';
$userDAO= new Utilisateur();
$response=array();
if (isset($_REQUEST[nom],$_REQUEST[prenom],$_REQUEST[sexe],$_REQUEST[email],$_REQUEST[motDePasse]))
{
   $res=$userDAO->Add_user($_REQUEST[nom],$_REQUEST[prenom],$_REQUEST[sexe],$_REQUEST[email],$_REQUEST[motDePasse]);
   if ($res)
   {
       $response['statut']=1;
       $response['message']='successfull insert';

   }else{
       $response['statut']=0;
       $response['message']='Oups an errors  occured';
   }
}else{
    $response['statut']=0;
    $response['message']='Required fields missings';
}
echo  json_encode($response);