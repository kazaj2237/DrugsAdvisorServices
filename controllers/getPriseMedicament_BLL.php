<?php
require_once  '../Medicament.php';
$prisemedicament= new Prise_Medicament();

  $result=$medicaments->GetPrise();
  $compteur=0;
  $response=[];
  if (!empty($result))
  {
      foreach ($result as $me)
      {
          $response[$compteur]=array(
              'Nom'=>$me->Nom,
              'Date'=>$me->Date,
              'Heure'=>$me->Heure,
              'Quantite'=>$me->Quantite,
              'Quantite'=>$me->Quantite,
          );
          $compteur ++;
      }
      echo json_encode($response);
  }