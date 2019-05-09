<?php
require_once '../Utilisateur.php';
$userDAO= new Utilisateur();
$response=array();
if (isset($_REQUEST[idUtilisateur]))
{
   $res=$userDAO->Update_user($_REQUEST[idUtilisateur]);
   if (!empty($res))
   {
       $response['statut']=1;
       $response['message']='successfull update';

   }else{
       $response['statut']=0;
       $response['message']='Oups an errors  occured';
   }
}else{
    $response['statut']=0;
    $response['message']='Required fields missings';
}
echo  json_encode($response);