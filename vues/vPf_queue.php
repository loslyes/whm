<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whm">
    <meta name="author" content="Whm">
    <meta name="keyword" content="Whm">
    <link rel="shortcut icon" href="./vues/img/favicon.png">

    <title>Pare-feu - queue</title>

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
      				<h3 class="page-header"><i class="fa fa fa-bars"></i> Queue</h3>
      				<ol class="breadcrumb">
      					<li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
      					<li><i class="fa fa-bars"></i>Pare-feu</li>
                <li><i class="fa fa-bars"></i>Queue</li>
      				</ol>
      			</div>
      		</div>
          <!--FIN-Panel link page-->
          <!--Panel Création d'une queue root-->
           <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="panel panel-default">
              <div class="panel-heading">Création d'une queue root</div>
                <div class="panel-body">
                  <form method="POST" action="index.php?p=pf_queue">
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="nom_queue_root">Nom de la queue root :</label>
                      <input type="text" placeholder="Entrez un nom" id="nom_queue_root" class="form-control" name="queue_nom_root"/>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="select_interface_queue">Interface :</label>
                        <select class="form-control" name="queue_interface_root">
                          <option>re0</option>
                          <option>re1</option>
                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="debit_queue_root">Débit de la queue root :</label>
                      <input type="number" min="1" class="form-control" placeholder="Entrez un débit" name="queue_debit_root"/>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="unite_queue_root">Unité de la queue root :</label>
                      <select class="form-control" name="queue_unite_root">
                        <option>K</option>
                        <option>M</option>
                        <option>G</option>
                      </select>
                    </div>
                    <br/><br/><br/><br/>
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="nom_queue_default">Nom de la queue default :</label>
                      <input type="text" placeholder="Entrez un nom" id="nom_queue_default" class="form-control" name="queue_nom_default"/>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="debit_queue_default">Débit de la queue default :</label>
                      <input type="number" min="1" class="form-control" placeholder="Entrez un débit" name="queue_debit_default"/>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="unite_queue_default">Unité de la queue default :</label>
                      <select class="form-control" name="queue_unite_default">
                        <option>K</option>
                        <option>M</option>
                        <option>G</option>
                      </select>
                    </div>
                    <br/><br/><br/><br/>
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center">
                      <button type="submit" name="queue_ajout_root" class="btn btn-default">Ajouter votre queue root</button>
                    </div>
                  </form>
                  <!--FIN-Formulaire création queue root-->
                </div>
            </div>
          </div>
          
          <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="panel panel-default">
              <div class="panel-heading">Création d'une queue enfant</div>
                <div class="panel-body">
                  <form method="POST" action="index.php?p=pf_queue">
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="select_root_enfant">Queue root :</label>
                      <select class="form-control" name="queue_root_enfant">
                        <option>toto</option>
                        <option>titi</option>
                      </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-xs-3">
                      <label for="nom_queue_enfant">Nom de la queue enfant :</label>
                      <input type="text" placeholder="Entrez un nom" id="nom_queue_enfant" class="form-control" name="queue_nom_enfant"/>
                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-2">
                      <label for="debit_queue_enfant">Débit :</label>
                      <input type="number" min="1" class="form-control" placeholder="Entrez un débit" name="queue_debit_enfant"/>
                    </div>
                    <div class="col-lg-1 col-md-1 col-xs-1">
                      <label for="min_queue_enfant">Min :</label>
                      <input type="number" min="1" class="form-control" placeholder="Valeur min" name="queue_min_enfant"/>
                    </div>
                    <div class="col-lg-1 col-md-1 col-xs-1">
                      <label for="max_queue_enfant">Max :</label>
                      <input type="number" min="1" class="form-control" placeholder="Valeur max" name="queue_max_enfant"/>
                    </div>

                    <div class="col-lg-2 col-md-2 col-xs-2">
                      <label for="unite_queue_enfant">Unité :</label>
                      <select class="form-control" name="queue_unite_enfant">
                        <option>K</option>
                        <option>M</option>
                        <option>G</option>
                      </select>
                    </div>
                    <br/><br/><br/><br/>
                    <div class="col-lg-12 col-md-12 col-xs-12 text-center">
                      <button type="submit" name="queue_ajout_enfant" class="btn btn-default">Ajouter votre queue enfant</button>
                    </div>
                  </form>
                </div>
            </div>
          </div>
          <!--Tableau des queue-->
          <div class="panel panel-default">
            <div class="panel-heading">Tableau des queues</div>
              <div class="panel-body"> 
                <form method="POST" action="index.php?p=pf_queue">
                  
                  <div class="input-group"><span class="input-group-addon">Filtre</span>
                    <input id="filter" type="text" class="form-control" placeholder="Tapez ici...">
                  </div>
                  
                  <table class="table table-striped">
                      <thead>
                          <tr>
                              <th>Cocher</th>
                              <th>Nom de la queue root</th>
                              <th>Cocher</th>
                              <th>Nom de la queue enfant</th>
                          </tr>
                      </thead>
                      <tbody class="searchable">
                          <tr>
                              <td>
                                <input type="checkbox" name="tab_nom_root">
                              </td>
                              <td>root_queue</td>
                              <td>
                                <input type="checkbox" name="tab_nom_enfant">
                              </td>
                              <td>root_enfant</td>
                          </tr>
                      </tbody>
                  </table>
                  
                  <div class="col lg-12 col-md-12 col-xs-12 text-center">  
                    <button type="submit" name="supprimer_queue_root" class="btn btn-danger">Supprimer une queue root</button>
                  </div>
                  <br/>
                  
                  <div class="col lg-12 col-md-12 col-xs-12 text-center">  
                    <button type="submit" name="supprimer_queue_enfant" class="btn btn-danger">Supprimer une queue enfant</button>
                  </div>
                </form>
              </div>
          </div>      
      </section>
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
  </body>
</html>