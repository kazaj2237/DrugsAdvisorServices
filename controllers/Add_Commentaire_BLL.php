<?php
require_once '../Utilisateur.php';
$commentaireDAO= new Commentaire();
$response=array();
if (isset($_REQUEST[idPharmacie],$_REQUEST[commentaire],$_REQUEST[idUser],$_REQUEST[libelle]))//$idPharmacie, $commentaire, $idUser, $libelle
{
   $res=$commentaireDAO->addComment($_REQUEST[idPharmacie],$_REQUEST[commentaire],$_REQUEST[idUser],$_REQUEST[libelle]);
   if (!empty($res))
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