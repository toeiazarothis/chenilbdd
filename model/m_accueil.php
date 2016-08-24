<?php
include('m_conncect.php')
/**/
connexionBdd()
function ListeDesChiens(){
  $result = $bdd -> query('SELECT nom_ch FROM ORDER BY ASC'); returne $result
} ?>










<?php


  foreach ($variable as $key => $value):
    echo $nomChien['nom_ch'].' || ';
  endforeach;


?>
