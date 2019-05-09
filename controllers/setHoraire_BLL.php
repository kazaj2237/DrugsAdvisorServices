<?php
require_once '../Utilisateur.php';
$horaireDAO= new Horaire();
$response=array();
if (isset($_REQUEST[jourSemaine],$_REQUEST[heureOuverture],$_REQUEST[heureFermeture],$_REQUEST[debutValidite],$_REQUEST[finValidite],$_REQUEST[estDeGarde],$_REQUEST[PharmacieidPharmacie]))
{
   $res=$horaireDAO->setHoraire($_REQUEST[jourSemaine],$_REQUEST[heureOuverture],$_REQUEST[heureFermeture],$_REQUEST[debutValidite],$_REQUEST[finValidite],$_REQUEST[estDeGarde],$_REQUEST[PharmacieidPharmacie]);
   if ($res)
   {
       $response['statut']=1;
       $response['message']='successfull insert horaire';

   }else{
       $response['statut']=0;
       $response['message']='Oups an errors  occured';
   }
}else{
    $response['statut']=0;
    $response['message']='Required fields missings';
}
echo  json_encode($response);