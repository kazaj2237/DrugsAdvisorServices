<?php
require_once  '../Medicament.php';
$pharmacies= new Pharmacie();

  $result=$pharmacies->Get_Pharmacies_List();
  $compteur=0;
  $response=[];
  if (!empty($result))
  {
      foreach ($result as $me)
      {
          $response[$compteur]=array(
              'Image'=>$me->Image,
              'Nom'=>$me->Nom
          );
          $compteur ++;
      }
      echo json_encode($response);
  }