<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Chenil du chien fumant</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!--Custom de la police d'ecriture-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
     <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body id="page-top" class="index">

      <!-- Navigation -->
      <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
          <div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                  </button>
                  <a class="navbar-brand page-scroll" href="#page-top">Chenil du chien Fumant</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                      <li class="hidden">
                          <a href="#page-top"></a>
                      </li>
                      <li>
                        <a href="#">Administration</a>
                      </li>
                      <!--<li>
                          <a class="page-scroll" href="#contact">Contact</a>
                      </li>-->
                  </ul>
              </div>
              <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
      </nav>

    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bonjour, bienvenue!</div>
                <div class="intro-heading"><p>Vous etes le bienvenue sur le site du chenil du chien fumant. Le seul chenil ou les chien sont libre de fumer.<br>
                  Un lieu unique en son genre.</p>
                <a href="#information" class="page-scroll btn btn-xl">Decouvrez nos pensionaires</a>
            </div>
        </div>
    </header>
    <section id="information">
    <div class="container">
      <!-- Example row of columns -->
        <div class="row">
            <div class="col-md-6">
              <h2>Nos Pensionaires</h2>
              <p>Voici une liste de nos pensionaire actuellement present au chenil. </p>
              <?php
              //  include('../modele/m_accueil.php');
              echo 'HELLO WORLD !';
               function listeMoiLesChiens(){
                 $connexion = new PDO('mysql:host=mysql.hostinger.fr;dbname=u852249137_patri', 'u852249137_patri', 'azertyuiop');
                 $sql = 'SELECT nom_ch FROM chiens GROUP BY nom_ch ASC';
                 return $sql;
                //  $liste = $connexion->query('SELECT nom_ch FROM chiens GROUP BY nom_ch ASC');
                //  $result = $liste->fetchALL();
                //  return $result;
               }
              // echo listeMoiLesChiens();

                ?>
               <form action="v_supre_chien.php" method="post">
                 <select name="suprnom">
                   <?php

                     include('../modele/id.php');


                   $liste_chiens = listeMoiLesChiens();
                   var_dump($liste_chiens);
                   die('fin');

                   foreach ($liste_chiens as $value) {
                     echo "<option>".$value['nom_ch']."</option>";
                   }
                   ?>

                 </select>
                 <input type="submit" name="submit" value="Supprimer le chien">
               </form>
              <p><a class="btn btn-default" href="#" role="button">Detail &raquo;</a></p>
            </div>


            <div class="col-md-4">
              <h2>Ajouter votre chien</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p>
                <div class="row">
                  <form action="v_ajout_chien.php" method="post">
                    <input type="text" required name="nom" placeholder="Entrer un chien">
                    <input type="text" required name="race" placeholder="Entrer une race">
                    <input type="text" required name="sexe" placeholder="Entrer le sexe du chien">
                    <input type="submit" name="submit" value="Ajouter le chien">
                  </form>
                  <!-- <form action="modif_pro.php" method="post">
                    <select name="modifpro">
                      <?php
                      // $liste_pro = listeMoiLesPro();
                      // foreach ($liste_pro as $value) {
                      //   echo '<option value='.$value['code_pro'].'>'.$value['nom_pro'].'</option>';
                      // }
                       ?>
                    </select>
                    <input type="text" name="nompro" placeholder="Ex:Jean">
                    <input type="text" name="tel" placeholder="Ex:06.56.67.90.07">
                    <input type="text" name="rue" placeholder="Ex:12 rue de la poupé qui tousse">
                    <input type="text" name="ville" placeholder="Ex:Troyes">
                    <input type="text" name="cp" placeholder="Ex:10000">
                    <input type="submit" name="submit" value="Modifier les infos">
                  </form> -->
                </div>
                <!--<input type="text" class="form-control" placeholder="Text input"><a class="btn btn-default" href="#" role="button">Ajout &raquo;</a>--></p>
            </div>
        </div>
    </section>

      <hr>

      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                      <span class="copyright">Copyright &copy; ToeiAzarothis All rights reserved </span>
                  </div>
              </div>
          </div>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>