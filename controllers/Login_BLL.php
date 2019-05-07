<?php
require_once '../Utilisateur.php';
$userDAO= new Utilisateur();
$response=array();
if (isset($_REQUEST[email],$_REQUEST[motDePasse] ))
{
   $res=$userDAO->Login($_REQUEST[email],$_REQUEST[motDePasse]);
   if (!empty($res))
   {
       $response['statut']=1;
       $response['nom']=$res->nom;
       $response['prenom']=$res->prenom;
       $response['sexe']=$res->sexe;
       $response['email']=$res->email;
       $response['message']='successfull login';

   }else{
       $response['statut']=0;
       $response['message']='Oups an errors  occured';
   }
}else{
    $response['statut']=0;
    $response['message']='Required fields missings';
}
echo  json_encode($response);