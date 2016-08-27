  <?php
  include('id.php');
  //chiens
  function listeMoiLesChiens(){
    $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u852249137_patri', UTILISATEUR, PASS);
    $liste = $connexion->query('SELECT nom_ch FROM chiens GROUP BY nom_ch ASC');
    $result = $liste->fetchALL();
    return $result;
  }
  function ajoutChiens(){
    $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u852249137_patri', UTILISATEUR, PASS);

    $ajout = $connexion->query("INSERT INTO chiens(nom_ch, race_ch, sexe_ch) VALUES ('".$_POST['nom']."','".$_POST['race']."','".$_POST['sexe']."');");

    echo  "Votre chiens à bien été ajouté dans nos chenil! <br>";
  }
  function supprimeChiens(){
    $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u852249137_patri', UTILISATEUR, PASS);

    $supr = $connexion->query("DELETE FROM chiens WHERE nom_ch =\"".$_POST['suprnom']."\"");
    echo  "Votre chiens à bien été supprimé dans nos chenil! <br>";
  }
  //proprietaires
  function listeMoiLesPro(){
    $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u852249137_patri', UTILISATEUR, PASS);
    $liste = $connexion->query('SELECT code_pro, nom_pro FROM proprietaires');
    $result = $liste->fetchALL();
    return $result;
  }
  // function ajoutPro(){
  //   $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u899753040_ande', UTILISATEUR, PASS);
  //
  //   $ajout = $connexion->query("INSERT INTO proprietaires(nom_pro, tel_pro, ville_pro, rue_pro, cp_pro) VALUES ('".$_POST['ajoutnompro']."','".$_POST['race']."','".$_POST['sexe']."');");
  //
  //   echo  "Votre chiens à bien été ajouté dans nos chenil! <br>";
  // }
  function modifPro(){
    $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u852249137_patri', UTILISATEUR, PASS);

    $modif = $connexion->query("UPDATE proprietaires SET nom_pro =\"".$_POST['nompro']."\"".",tel_pro =\"".$_POST['tel']."\"".",ville_pro =\"".$_POST['ville']."\"".",rue_pro =\"".$_POST['rue']."\"".",cp_pro =\"".$_POST['cp']."\""
    ." WHERE code_pro =\"".$_POST['modifpro']."\"");

    echo  "Vos infos on bien été pris en compte! <br>";
  }
  function supprimePro(){
    $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u852249137_patri', UTILISATEUR, PASS);

    $supr_pro = $connexion->query("DELETE FROM proprietaires WHERE nom_pro =\"".$_POST['suprnompro']."\"");
    echo  "Votre chiens à bien été supprimé dans nos chenil! <br>";
  }
  ?>
