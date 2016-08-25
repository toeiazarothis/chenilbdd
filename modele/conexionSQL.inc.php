<?php
// CONNEXION A LA BASE DE DONNEES (Cet fonctions ne changera jamais)
include('id.php');

function AfficheConnexion(){
  try {
      $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u899753040_ande', UTILISATEUR, PASS);
  } catch (PDOException $e) {
      echo 'Erreur !: '. $e->getMessage().'<br>';
      die();
  }
}
 ?>
