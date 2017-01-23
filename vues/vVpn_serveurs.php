<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Whm">
    <meta name="author" content="Whm">
    <meta name="keyword" content="Whm">
    <link rel="shortcut icon" href="./vues/img/favicon.png">

    <title>Vpn - Serveurs</title>

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
      				<h3 class="page-header"><i class="fa fa fa-bars"></i> VPN</h3>
      				<ol class="breadcrumb">
      					<li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
      					<li><i class="fa fa-bars"></i>VPN</li>
                <li><i class="fa fa-bars"></i>Serveurs</li>
      				</ol>
      			</div>
      		</div>
          <!--FIN-Panel link page-->
          
          <!--Panel Création d'une table-->
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">x509</div>
                <div class="panel-body">
                  <!--Formulaire création table-->
                  <form method="POST" action="index.php?p=vpn_serveurs">
				 
				  
				  <div class="col-lg-3">
				   <label for="ip">IP VPN :</label>
                     <input id="ip" type="text" class="form-control" name="interface_idinterface" placeholder="IP..."><br/>
					 </div>
					 <div class="col-lg-3">
					 <label for="masque">Masque VPN:</label>
					  <input id="masque" type="text" class="form-control" name="network_idnetwork" placeholder="Masque..."><br/>
					</div>
					<div class="col-lg-2">
					<label for="ctc">Client-to-client :</label><br/>
					  <select class="form-control" id="ctc" name="client_to_client">
                        <option>on</option>
                        <option>off</option>
                      </select>
					  </div>
					
					  <div class="col-lg-2">
				   <label for="maxclient">Clients max :</label><br/>
					  <input id="maxclient" type="number" name="max_client" class="form-control" step="1" min="1">
					</div>
						<div class="col-lg-2"> 
				   <label for="log">Verbosité des logs :</label><br/>
				   <input id="log" type="number" name="log" class="form-control" step="1"  min="1" max="9">
				   </div>
				   <div class="col lg-11 col-md-11 col-xs-11 text-center"> <br/>
				   <button type="submit" name="x509_serveur" class="btn btn-default">Appliquer</button>
				   
				   </div>

					  
                      <br/>
                      <div class="text-center">
                      
                    </div>
                  </form>
				  <?php
                        if(isset($messErreurvpn)){
                            echo $messErreurvpn;
                        }
                        if(isset($messConfirmvpn)){
                            echo $messConfirmvpn;
                        }
                    ?>
                  <!--FIN-Formulaire création table-->
                </div>
            </div>
          </div>
          <!--FIN-Panel Création d'une table-->

          <!--Panel Ajout de contenu dans une table-->
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">PSK</div>
                <div class="panel-body">
                  <!--Formulaire Ajout contenu table-->
                  <form method="POST" action="index.php?p=vpn_serveurs">
                    
					 <div class="col-lg-4">
				   <label for="ipserver">IP Serveur :</label>
                     <input id="ipserver" type="text" class="form-control" placeholder="IP Serveur..." name="serverip"><br/>
					 </div>
					 <div class="col-lg-4">
					 <label for="ipclient">IP Client :</label>
					  <input id="ipclient" type="text" class="form-control" placeholder="IP Client..." name="clientip" ><br/>
					</div>
					<div class="col-lg-4">
					  <label for="log">Verbosité des logs :</label><br/>
					 <input id="log" type="number" class="form-control" name="psk_log" step="1"  min="1" max="9">
					 </div>
				   <div class="col lg-11 col-md-11 col-xs-11 text-center"> <br/>

				   <button type="submit" name="psk_serveur" class="btn btn-default">Appliquer</button>
				   </div>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6">
                     
                      <br/>
                      <div class="text-center">
                      </div>
                  </form>
				    <?php
                        if(isset($messErreurvpnpsk)){
                            echo $messErreurvpnpsk;
                        }
                        if(isset($messConfirmvpnpsk)){
                            echo $messConfirmvpnpsk;
                        }
                    ?>
                  <!--FIN-Formulaire ajout contenu table-->
                </div>
            </div>
          </div>
         
</div>
          
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