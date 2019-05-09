<?php
require_once  '../Medicament.php';
$traitements= new Traitement();

  $result=$traitements->Get_traitements();
  $compteur=0;
  $response=[];
  if (!empty($result))
  {
      foreach ($result as $me)
      {
          $response[$compteur]=array(
              'libelle'=>$me->libelle,
              'duree'=>$me->duree,
              'uniteDuree'=>$me->uniteDuree,
              'frequenceRappel'=>$me->frequenceRappel,
              'uniteFrequence'=>$me->uniteFrequence,
              'idUtilisateur'=>$me->idUtilisateur,
              'nom'=>$me->nom,
              'prenom'=>$me->prenom,
              'sexe'=>$me->sexe,
              'email'=>$me->email
          );
          $compteur ++;
      }
      echo json_encode($response);
  }