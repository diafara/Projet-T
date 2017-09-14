<?php ini_set('default_charset', 'iso8859-1');
session_start();
$a = 0;

if(isset($_POST['email']) && isset($_POST['pass'])){
   echo "toto";
 require_once('content/classes/classeConnexion.php'); 
  $pass = $_POST['pass'];
  $email = $_POST['email'];
  
   $requete = Connexion::Connect()->query("SELECT * FROM user WHERE email = \"$email\" and pass = \"$pass\" ");
	foreach ($requete as $donnee){
		$_SESSION['id'] = $donnee['id'];
		$_SESSION['nom'] = $donnee['nom'];
		$_SESSION['prenom'] = $donnee['prenom'];
     header('Location: ./');
     $a = 1;
	}
}
if(isset($_GET['destroy'])){
   session_destroy();
}
?>
<!DOCTYPE html>

<html lang="fr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  
  <title>L'oeil du Client</title>

  <!-- Favicons-->
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
  <!-- Favicons-->
  <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <!-- For iPhone -->
  <meta name="msapplication-TileColor" content="#00bcd4">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <!-- For Windows Phone -->
  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->    
    <link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/layouts/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="js/plugins/prism/prism.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="js/plugins/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet" media="screen,projection">
  
</head>

<body class="cyan">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>        
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" method="post" action="connexion.html">
        <div class="row">
          <div class="input-field col s12 center">
            <?php
          if(isset($_POST['email']) && $a==1){
             echo '<div id="card-alert" class="card red lighten-5">
                      <div class="card-content red-text">
                        <p>ERREUR : Email ou mot de passe incorrect</p>
                      </div>
                      <button type="button" class="close red-text" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                      </button>
                    </div>';
          } 
           
           ?>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/materialize-logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">L'oeil du Client</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="email" name="email">
            <label for="username" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="pass">
            <label for="password">Mot de passe</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12" style="background-color:#ee1a3b" type="submit">Connexion</button>
          </div>
        </div>
        

      </form>
    </div>
  </div>
  <!-- ================================================
    Scripts
    ================================================ -->
  <!-- jQuery Library -->
  <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <!--prism-->
  <script type="text/javascript" src="js/plugins/prism/prism.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
</body>
</html>