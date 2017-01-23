<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Whm">
  <meta name="author" content="Whm">
  <meta name="keyword" content="Whm">
  <link rel="shortcut icon" href="./vues/img/favicon.png">

  <title>Serveurs DHCP Static</title>

  <!-- Bootstrap CSS -->
  <link href="./vues/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="./vues/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="./vues/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="./vues/css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="./vues/css/style.css" rel="stylesheet">
  <link href="./vues/css/style-responsive.css" rel="stylesheet" />
  <link href="./vues/css/switch.css" rel="stylesheet" />
  <style>
  .affix {top: 70px;}
  </style>

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <script src="js/lte-ie7.js"></script>
  <![endif]-->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php
    include(dirname(__FILE__).'/header.php');
    ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i>Adressage</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
              <li><i class="fa fa-bars"></i>Infrastructure</li>
              <li><i class="fa fa-bars"></i>Serveur DHCP Static</li>
            </ol>
          </div>
        </div>
        <!--FIN-Panel link page-->
        <!--Panel core page-->
        <div class="col-md-12">
          <div class="panel panel-default">
            <div class="panel-heading">Configurer le serveur de nom
              <a data-toggle="collapse" data-target="#config_dns"><span class="icon_pencil-edit"></span></a>
            </div>
            <div id="config_dns" class="panel-body collapse">

              <form method="POST" action="index.php?p=infra_host" class="form-horizontal">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ip" class="col-md-3 control-label">Adresse IP* :</label>
                    <div class="col-md-8">
                      <input type="text" placeholder="Entrez une ip" class="form-control" name="ip"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="state" class="col-md-3 control-label">Etat* : </label>
                    <div class="col-md-8">
                      <label class="radio-inline"><input type="radio" name="inverse" value="1"/>Actif</label>
                      <label class="radio-inline"><input type="radio" name="inverse" value="0"/>Inactif</label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="ip" class="col-md-3 control-label">Adresse IP* :</label>
                    <div class="col-md-8">
                      <input type="text" placeholder="Entrez une ip" class="form-control" name="ip"/>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="state" class="col-md-3 control-label">Etat* : </label>
                    <div class="col-md-8">
                      <label class="radio-inline"><input type="radio" name="inverse" value="1"/>Actif</label>
                      <label class="radio-inline"><input type="radio" name="inverse" value="0"/>Inactif</label>
                    </div>
                  </div>
                </div>

                <div class="form-group text-center">
                  <input type='hidden' name='formulaire' value='add_domain'>
                  <button type="submit" name="add_domain" class="btn btn-primary">Valider</button>
                </div>
              </form>

            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">Serveurs</div>
            <div class="panel-body">

              <div class="input-group"> <span class="input-group-addon">Filtre</span>
                <input id="filter" type="text" class="form-control" placeholder="Tapez ici...">
              </div>

              <!-- Taleau des hosts -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nom</th>
                    <th></th>
                    <th></th>
                    <th>Configurer</th>
                    <th>Supprimer</th>
                  </tr>
                </thead>
                <tbody class="searchable">
                  <tr>
                    <td>toto</td>
                    <td></td>
                    <td></td>
                    <td>

                      <form method="POST" action="index.php?p=infra_record">
                        <input type='hidden' name='formulaire' value='domain'>
                        <button type="submit" name="domain" value="1" class="btn btn-default"><span class="icon_cog"></span> </button>
                      </form>

                    </td>
                    <td>

                      <form method="POST" action="index.php?p=infra_dns">
                        <input type='hidden' name='formulaire' value='del_domain'>
                        <button type="submit" name="del_host" value="1" class="btn btn-danger"><span class="icon_trash"></span> </button>
                      </form>

                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- FIN Tableau des hosts-->
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="panel panel-default" data-spy="affix" data-offset-top="140">
            <div class="panel-heading">Ajouter un domaine
              <a data-toggle="collapse" data-target="#add_domain"><span class="nounderline icon_pencil-edit"></span></a>
            </div>

            <div id="add_domain" class="panel-body collapse">
              <form method="POST" action="index.php?p=infra_host">
                <div class="form-group">
                  <label for="domaine">Nom* :</label>
                  <input type="text" placeholder="Entrez un nom" class="form-control" name="domain"/>
                </div>

                <div class="form-group">
                  <label for="ip">Adresse IP* :</label>
                  <input type="text" placeholder="Entrez une ip" class="form-control" name="ip"/>
                </div>

                <div class="form-group">
                  <label for="mail">Mail Administrateur* :</label>
                  <input type="text" placeholder="Entrez un mail" class="form-control" name="mail"/>
                </div>

                <div class="form-group">
                  <label for="inverse">Domaine inverse ?* </label>
                  <label class="radio-inline"><input type="radio" name="inverse" value="1"/>Oui</label>
                  <label class="radio-inline"><input type="radio" name="inverse" value="0"/>Non</label>
                </div>

                <div class="text-center">
                  <input type='hidden' name='formulaire' value='add_domain'>
                  <button type="submit" name="add_domain" class="btn btn-primary">Valider</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

    </section>
    <!--main content end-->
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="./vues/js/jquery.js"></script>
  <script src="./vues/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="./vues/js/jquery.scrollTo.min.js"></script>
  <script src="./vues/js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
  <script src="./vues/js/scripts.js"></script>
  <script src="./vues/js/tableau.js"></script>
  <script src="./vues/js/input_select.js"></script>
  <script>
  function disable_enable() {
    if(document.getElementById('state').value == "static") {
      document.getElementById('network').disabled = false;
      document.getElementById('mask').disabled = false;
      document.getElementById('gateway').disabled = false;
      document.getElementById('dns').disabled = false;
    }
    else {
      document.getElementById('network').disabled = true;
      document.getElementById('mask').disabled = true;
      document.getElementById('gateway').disabled = true;
      document.getElementById('dns').disabled = true;
    }
  }
  </script>
</body>
</html>
