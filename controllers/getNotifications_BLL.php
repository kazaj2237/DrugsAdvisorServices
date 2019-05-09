<?php
require_once  '../Medicament.php';
$notifications= new Notification();

  $result=$notifications->Get_notifications();
  $compteur=0;
  $response=[];
  if (!empty($result))
  {
      foreach ($result as $me)
      {
          $response[$compteur]=array(
              'idNotif'=>$me->idNotif,
              'titre'=>$me->titre,
              'message'=>$me->message,
              'lien'=>$me->lien,
              'date'=>$me->date,
              'heure'=>$me->heure,
              'idUtilisateur'=>$me->idUtilisateur,
              'nom'=>$me->nom
          );
          $compteur ++;
      }
      echo json_encode($response);
  }