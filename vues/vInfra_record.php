<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Whm">
  <meta name="author" content="Whm">
  <meta name="keyword" content="Whm">
  <link rel="shortcut icon" href="./vues/img/favicon.png">

  <title>Adressage</title>

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
            <h3 class="page-header"><i class="fa fa fa-bars"></i>Adressage</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Accueil</a></li>
              <li><i class="fa fa-bars"></i>Infrastructure</li>
              <li><i class="fa fa-bars"></i>Adressage</li>
            </ol>
          </div>
        </div>
        <!--FIN-Panel link page-->
        <!--Panel core page-->
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-heading">DHCP</div>
            <div class="panel-body">

              <div class="input-group"> <span class="input-group-addon">Filtre</span>
                <input id="filter" type="text" class="form-control" placeholder="Tapez ici...">
              </div>

              <!-- Configuration DHCP -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Nom de machine</th>
                    <th>Type</th>
                    <th>Priorité</th>
                    <th>Port</th>
                    <th>Valeur</th>
                  </tr>
                </thead>
                <tbody class="searchable">
                  <tr>
                    <td>www</td>
                    <td>A</td>
                    <td></td>
                    <td></td>
                    <td>192.168.4.1</td>
                  </tr>
                </tbody>
              </table>
              <!-- FIN COnfiguration DHCP-->

            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="panel panel-default" data-spy="affix" data-offset-top="140">
            <div class="panel-heading">Ajouter un serveur</div>
            <div class="panel-body">

              <form method="POST" action="index.php?p=infra_host">
                <div class="form-group">
                  <label for="domaine">Nom de machine* :</label>
                  <input type="text" placeholder="Entrez un nom" class="form-control" name="name"/>
                </div>

                <div class="form-group">
                  <label for="type">Type* :</label>
                  <select class="form-control" id="type" name="type" onchange="disable_enable()">
                    <option value="A" selected>A</option>
                    <option value="CNAME">CNAME</option>
                    <option value="MX">MX</option>
                    <option value="SRV">SRV</option>
                    <option value="NS">NS</option>
                  </select>

                  <div class="form-group">
                    <label for="valeur">Valeur* :</label>
                    <input type="text" placeholder="Entrez une valeur" class="form-control" name="value"/>
                  </div>

                  <div class="form-group">
                    <label for="priorité">Priorité :</label>
                    <input type="number" placeholder="Entrez un nombre" class="form-control" id="priority" name="priority"/>
                  </div>

                  <div class="form-group">
                    <label for="port">Port :</label>
                    <input type="number" min="1" max="65535" placeholder="Entrez un nombre" class="form-control" id="port" name="port"/>
                  </div>

                  <div class="form-group">
                    <label for="protocole">Protocole :</label>
                    <select class="form-control" id="protocol" name="protocol">
                      <option value="TCP">TCP</option>
                      <option value="UDP">UDP</option>
                    </select>
                  </div>

                  <div class="text-center">
                    <input type='hidden' name='formulaire' value='dhcp'>
                    <button type="submit" name="ajouter_pf_simple" class="btn btn-primary">Valider</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
        <!--FIN-Panel configuration DHCP-->

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
      if(document.getElementById('type').value == "SRV") {
        document.getElementById('priority').disabled = false;
        document.getElementById('port').disabled = false;
        document.getElementById('service').disabled = false;
        document.getElementById('protocol').disabled = false;
      }
      else if (document.getElementById('type').value == "MX") {
        document.getElementById('priority').disabled = false;
        document.getElementById('port').disabled = true;
        document.getElementById('service').disabled = true;
        document.getElementById('protocol').disabled = true;
      }
      else {
        document.getElementById('priority').disabled = true;
        document.getElementById('port').disabled = true;
        document.getElementById('service').disabled = true;
        document.getElementById('protocol').disabled = true;
      }
    }
    </script>
  </body>
  </html>
