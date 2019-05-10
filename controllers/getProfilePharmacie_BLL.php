<?php
require_once  '../Medicament.php';
$pharmacies= new Pharmacie();

  $result=$pharmacies->Get_Pharmacies_Profile();
  $compteur=0;
  $response=[];
  if (!empty($result))
  {
      foreach ($result as $me)
      {
          $response[$compteur]=array(
              'Image'=>$me->Image,
              'Nom'=>$me->Nom,
              'Numero'=>$me->Numero

          );
          $compteur ++;
      }
      echo json_encode($response);
  }