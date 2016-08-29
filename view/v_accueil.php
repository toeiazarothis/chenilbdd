<!DOCTYPE html>
<html lang="fr">
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
    <link rel="stylesheet" href="../view/css/bootstrap.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../view/css/custom.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../view/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!--Custom de la police d'ecriture-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">


     <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../view/js/ie-emulation-modes-warning.js"></script>

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
                        <a href="#Information" class="page-scroll">Liste des chiens</a>
                      </li>
                      <li>
                        <a href="#AjoutChien" class="page-scroll">Ajouter votre chien</a>
                      </li>
                      <li>
                        <a href="#ModifProfil" class="page-scroll">Mise à jour de profil</a>
                      </li>
                      <li>
                        <a href="#RetirerChien" class="page-scroll">Retirer un chien</a>
                      </li>
                      <!--<li>
                          <a class="page-scroll" href="#contact">Contact</a>
                      </li>-->
                  </ul>
              </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        <header>
          <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bonjour, bienvenue!</div>
              <div class="intro-heading"><p>Vous etes le bienvenue sur le site du chenil du chien fumant. Le seul chenil ou les chien sont libre de fumer.<br>Un lieu unique en son genre.</p>
                <a href="#Information" class="page-scroll btn btn-xl">Decouvrez nos pensionaires</a>
              </div>
            </div>
        </header>

        <section id="Information">
          <div class="container">
            <div class="row">
              <div class="col-lg-10 col-md-offset-1 text-center">
              <h2>Nos Pensionaires</h2><br>
              <p>Voici une liste des chiens actuellement en notre compagnie. Cette liste est automatiquement mise a jour par notre systeme informatique.</p><br>
              <div class="col-lg-4 col-md-offset-4 text-center">
                <select name="suprnom" class="form-control">
                  <?php
                  $liste_chiens = listeMoiLesChiens();
                  foreach ($liste_chiens as $value) {
                    echo
                    "<option>".$value['nom_ch']."</option>";
                  }
                  ?>
                </select><br>
              </div>
              </div>
            </div>
          </div>
        </section>

        <section id="AjoutChien" class="bg-light-gray">
              <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-offset-1 text-center">
                      <h2>Ajouter votre chien</h2><br>
                      <p>Vous etes une personne intelligente et vous souhaitez faire vivre une vrai experience de joie et de bonheur a votre chien ? Alors qu'attendez vous ? utilisez ce formulaire pour enregistrez votre amis a poil dans notre registre en attendant votre visite dans les contré du Yomi.
                      </p><br>
                      <p>
                      <div class="row">
                        <div class="col-lg-4 col-md-offset-4 text-center">
                          <form action="c_ajout_chien.php" method="post">
                            <input type="text" class="form-control" required name="nom" placeholder="Entrer un chien">
                            <input type="text" class="form-control" required name="race" placeholder="Entrer une race">
                            <input type="text" class="form-control" required name="sexe" placeholder="Entrer le sexe du chien">
                            <input class="btn btn-default"type="submit" name="submit" value="Ajouter le chien">
                          </form><br>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </section>

            <section id="ModifProfil">
              <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-offset-1 text-center">
                      <h2>Modification de profil</h2><br>
                      <p>Grace a notre nouveau systeme vous avez la possiblité de modifier votre profil a distance sans pour autant avoir besoin de vous deplacer dans les contré de Yomi.<br>Pour ce faire, rien de plus simple, il vous suffit de remplir le formulaire ci dessous.<br><br>
                      </p>
                      <div class="col-lg-4 col-md-offset-4 text-center">
                        <form action="c_modif_pro.php" method="post">
                          <select name="modifpro" class="form-control">
                            <?php
                            $liste_pro = listeMoiLesPro();
                            foreach ($liste_pro as $value) {
                              echo
                              '<option value ='.$value['code_pro'].'>'.$value['nom_pro'].'</option>';
                            }
                             ?>
                          </select>
                          <input type="text" class="form-control" name="nompro" placeholder="Ex:Jean">
                          <input type="text" class="form-control" name="tel" placeholder="Ex:06.56.67.90.07">
                          <input type="text" class="form-control" name="rue" placeholder="Ex:12 rue de la poupé qui tousse"><br>
                          <input type="text" class="form-control" name="ville" placeholder="Ex:Troyes">
                          <input type="text" class="form-control" name="cp" placeholder="Ex:10000">
                          <input class="btn btn-default"type="submit" name="submit" value="Modifier les infos">
                        </form><br>
                      </div>
                    </div>
                <!--<input type="text" class="form-control" placeholder="Text input"><a class="btn btn-default" href="#" role="button">Ajout &raquo;</a>--></p>
                </div>
              </div>
            </section>

            <section id="RetirerChien" class="bg-light-gray">
              <div class="container">
                <div class="row">
                  <div class="col-lg-10 col-md-offset-1 text-center">
                  <h2>Recuperer votre animal</h2><br>
                  <p>Vous avez la possibilité de recuperer votre chien en nous prevenant a l'avance. Afin de proteger les chiens ainsi que les membres de l'equipe il vous sera demander de vous munir d'un document prouvant votre identité et egalement de laisser votre vehicule sur le parking prevue a cette effet. </p><br><br>
                  <div class="col-lg-4 col-md-offset-4 text-center">
                    <form action="c_supr_chien.php" method="post">
                      <select name="suprnom" class="form-control">
                        <?php
                        $liste_chiens = listeMoiLesChiens();
                        foreach ($liste_chiens as $value) {
                          echo
                          "<option>".$value['nom_ch']."</option>";
                        }
                        ?>
                      </select>
                      <input class="btn btn-default"type="submit" name="submit" value="Supprimer le chien">
                    </form>
                  </div>
                  </div>
                </div>
              </div>
            </section>

      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                      <span class="copyright">Copyright &copy; <i class="fa fa-fire"></i> ToeiAzarothis / <i class="fa fa-audio-description"></i>Tonyastra All rights reserved </span>
                  </div>
              </div>
          </div>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery -->
    <script src="../view/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../view/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../view/js/jqBootstrapValidation.js"></script>
    <script src="../view/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="../view/js/agency.min.js"></script>
  </body>
</html>
