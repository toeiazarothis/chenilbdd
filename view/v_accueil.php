<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>view</title>
  </head>
  <body>
    <?php
    include('../modele/m_accueil.php');

    $liste_chiens = listeMoiLesChiens();
    foreach ($liste_chiens as $value) {
      echo $value['nom_ch'].'<br>';
    }
     ?>
     <form action="v_ajout_chien.php" method="post">
       <input type="text" required name="nom" placeholder="Entrer un chien">
       <input type="text" required name="race" placeholder="Entrer une race">
       <input type="text" required name="sexe" placeholder="Entrer le sexe du chien">
       <input type="submit" name="submit" value="Ajouter">
     </form>
     <form action="v_ajout_chien.php" method="post">
       <select  name="liste">
         <option>
       </select>
       <input type="submit" name="submit" value="Ajouter">
     </form>
  </body>
</html>
