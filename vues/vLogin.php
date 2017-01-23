<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Whm - Connexion</title>

    <!-- Bootstrap CSS -->    
    <link href="./vues/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="./vues/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="./vues/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="./vues/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="./vues/css/style.css" rel="stylesheet">
    <link href="./vues/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">

    <div class="container">

      <form method="POST" class="login-form" action="index.php?p=login">        
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
			<p><a href="index.php?p=signup">Creer votre compte</a></p>
            <button class="btn btn-primary btn-lg btn-block" name="connexion" type="submit">Connexion</button>
        </div>
      </form>

    </div>
	<div class="container">

    </div>
  </body>
</html>
