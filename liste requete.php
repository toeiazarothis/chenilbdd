<?php

9

SELECT *
FROM chiens
INNER JOIN proprietaires ON chiens.code_pro_ = prorietaires.code_pro
WHERE proprietaires.ville_pro ='Troyes' or proprietaires.ville_pro ='Lusigny';

10

SELECT count( nom_ch ) AS Listechien
FROM chiens

11

SELECT *
FROM aliments
INNER JOIN chiens
ON chiens.nom_ch ='Léa';

12

DELETE FROM manger WHERE daterepas < '2012-02-01'

13

UPDATE cages SET nbmax_ch = 1 WHERE surface < 4;

14

UPDATE manger SET quantite = quantite * 1.2 WHERE num_ch_ = 1;

15

SELECT SUM(quantite), nom_ch
FROM manger
INNER JOIN chiens
ON manger.num_ch_ = chiens.num_ch
GROUP BY num_ch;

16



17

ALTER TABLE proprietaires ADD facture INTEGER


 ?>
