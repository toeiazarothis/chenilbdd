<?php

function connexionBdd(){
  $bdd = news PDO("mysql:host=mysql.hostinger.fr;dbname=u852249137_patri" , USER , PASS);

try {
    $bdd = news PDO("mysql:host=mysql.hostinger.fr;dbname=u852249137_patri" , USER , PASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "COnnection Effectuer";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
