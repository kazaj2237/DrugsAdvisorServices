<?php
require_once  '../Medicament.php';
$medicaments= new Medicament();

  $result=$medicaments->Get_medicaments();
  $compteur=0;
  $response=[];
  if (!empty($result))
  {
      foreach ($result as $me)
      {
          $response[$compteur]=array(
              'Nom'=>$me->Nom,
              'Caracteristiques'=>$me->Caracteristiques,
              'notice'=>$me->notice
          );
          $compteur ++;
      }
      echo json_encode($response);
  }