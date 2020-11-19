<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- CSS perso -->
  <link href="css/main.css" rel="stylesheet">
  <!-- Fa icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="shortcut icon" href="http://www.votresite.com/favicon.ico"> LOgo Onglets -->
  <title>TP</title>
</head>

<body>
  <!-- header -->
  <header>
    <!-- nav bar top -->
    <nav class="navbar justify-content-center navbar-expand-lg bg-dark fixed-top">
      <div class="navbar-nav">
      <a class="nav-item nav-link active" href="https://amplify.nginx.com/login" target="_blank">Amplify <span class="sr-only">(current)</span></a>
      <a style="padding-right:2.5em;padding-left:2.5em" class="nav-item nav-link" href="http://127.0.0.5:8080/" target="_blank">PhpMyAdmin</a>      
      <a class="nav-item nav-link" href="http://127.0.0.1:8080/info.php">Info php</a>

    </div>
    </nav>
  </header>
  <!-- /header -->

    <!-- main -->
    <main id="tb">

<div class="container-fluid" id="bg">

  <div class="row" id="top">
    <!-- Team Barrettes -->
    <div class="span-13 offset-1 justify-content-center" id="center" style="border: solid; padding: 25px;">
      <h2>TP dockerisé</h2><br>
        <!-- <li class="nav-item active"> -->
        <h3>  PhpMyAdmin :</h3>
        <code>
            user : root |             mdp  : root
        </code>
        <br>
        <br>
        <h3>Contenu de la bdd :</h> <br>

          <pre>
          <?php
                $servername='172.72.72.73'; // le chemin vers le serveur
                $username='root'; // nom d'utilisateur pour se connecter
                $password='root'; // mot de passe de l'utilisateur pour se connecter
                try
                {
                        // $connexion = new PDO('mysql:host='.$PARAM_hote.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
                        $connexion = new PDO("mysql:host=$servername;port=3307;dbname=phpmyadmin", $username, $password); 
                }
                
                catch(Exception $e)
                {
                        echo 'Erreur : '.$e->getMessage().'<br />';
                        echo 'N° : '.$e->getCode();
                }    

                echo 'Connexion réussie';
                // utiliser la connexion ici
                $foo='testing';
                $sth = $connexion->query('SELECT * FROM exemple');
                $result = $sth->fetchAll();
                print_r($result);
                // et maintenant, fermez-la !
                $sth = null;
                $connexion = null;
                ?>
                </pre>

    </div>

    <div class="span-13 offset-1 justify-content-center" id="center" style="border: solid; padding: 25px;">
      <h2>TP dockerisé</h2><br>
                <p>Ce que contient ce docker :</p>
                <p>Nginx</p>
                <p>php 7</p>
                <p>bdd mysql + phpmyadmin</p>
                <p> ! ne convient pas à la prod ! seulement pour dev !</p>
    </div>
  </div>
  
</div>

</main>
</html>