<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('conexionSQL.inc.php');

    function listeMoiLesChiens(){
      $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u899753040_ande', UTILISATEUR, PASS);
      $liste = $connexion->query('SELECT nom_ch FROM chiens');
      $result = $liste->fetchALL();
      return $result;
    }

    function ajoutChiens(){
      $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u899753040_ande', UTILISATEUR, PASS);

        $ajout = $connexion->query("INSERT INTO chiens(nom_ch, race_ch, sexe_ch) VALUES ('".$_POST['nom']."','".$_POST['race']."','".$_POST['sexe']."');");

        echo  "Votre chiens à bien été ajouté dans nos chenil! <br>";
      }

      function supprimeChiens(){
        $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u899753040_ande', UTILISATEUR, PASS);

          $ajout = $connexion->query("DELETE FROM chiens WHERE nom_ch = '".$_POST['nom']."' ");

          echo  "Votre chiens à bien été supprimé dans nos chenil! <br>";
        }
     ?>
  </body>
</html>
