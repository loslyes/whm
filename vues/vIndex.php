<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whm">
    <meta name="author" content="Whm">
    <meta name="keyword" content="Whm">
    <link rel="shortcut icon" href="./vues/img/favicon.png">

    <title>Dashboard</title>

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
      				<h3 class="page-header"><i class="fa fa fa-bars"></i> Dashboard</h3>
      				<ol class="breadcrumb">
      					<li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
      					<li><i class="fa fa-bars"></i>Dashboard</li>
      				</ol>
      			</div>
      		</div>
          <!--FIN-Panel link page-->
          
          <!--Panel core page-->
          <div class="panel panel-default">
            <div class="panel-heading">Etats des services</div>
              <div class="panel-body">
                
                <!--Activer/désactiver le service pare-feu-->
                <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="panel panel-default">
                  <div class="panel-heading">Pare-feu</div>
                    <div class="panel-body">
                      <div class="checkbox checkbox-slider-lg checkbox-slider--b checkbox-slider-warning">
                      <label>
                        <input type="checkbox" name="etat_pare_feu"><span>Activer/Désactiver votre pare-feu</span>
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!--FIN-Activer/désactiver le service pare-feu-->

                <!--Activer/désactiver le service routage-->
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">Routage</div>
                      <div class="panel-body">
                        <div class="checkbox checkbox-slider-lg checkbox-slider--b checkbox-slider-warning">
                        <label>
                          <input type="checkbox" name="etat_routage"><span>Activer/Désactiver le routage</span>
                        </label>
                        </div>
                      </div>
                  </div>
                </div>
                <!--FIN-Activer/désactiver le service Routage-->

                <!--Activer/désactiver le service Dns cache-->
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">Dns cache</div>
                      <div class="panel-body">
                        <div class="checkbox checkbox-slider-lg checkbox-slider--b checkbox-slider-warning">
                        <label>
                          <input type="checkbox" name="etat_dns_cache"><span>Activer/Désactiver le dns cache</span>
                        </label>
                        </div>
                      </div>
                  </div>
                </div>
                <!--FIN-Activer/désactiver le service Dns cache-->

                <!--Activer/désactiver le service Dhcp-->
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">Dhcp</div>
                      <div class="panel-body">
                        <div class="checkbox checkbox-slider-lg checkbox-slider--b checkbox-slider-warning">
                        <label>
                          <input type="checkbox" name="etat_dhcp"><span>Activer/Désactiver le dhcp</span>
                        </label>
                        </div>
                      </div>
                  </div>
                </div>
                <!--FIN-Activer/désactiver le service Dhcp-->

                <!--Activer/désactiver le service vpn x509-->
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">VPN -X509-</div>
                      <div class="panel-body">
                        <div class="checkbox checkbox-slider-lg checkbox-slider--b checkbox-slider-warning">
                        <label>
                          <input type="checkbox"><span>Activer/Désactiver le VPN -X509-</span>
                        </label>
                        </div>
                      </div>
                  </div>
                </div>
        <!--Activer/désactiver le service vpn psk-->
                <div class="col-xs-6 col-sm-6 col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-heading">VPN -PSK-</div>
                      <div class="panel-body">
                        <div class="checkbox checkbox-slider-lg checkbox-slider--b checkbox-slider-warning">
                        <label>
                          <input type="checkbox"><span>Activer/Désactiver le VPN -PSK-</span>
                        </label>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <!--FIN-Main panel body-->
            </div>
            <!--FIN-Panel core page-->
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
  </body>
</html>