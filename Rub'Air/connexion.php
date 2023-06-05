<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<html>

<?php 
   require_once('_menu/menu.php');
   ?>
   
 <head>
 <meta charset="utf-8">
 <!-- importer le fichier de style -->
 <link rel="stylesheet" href="connexion.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <!-- zone de connexion -->
 
 <form action="verification.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Nom d'utilisateur</b></label>
 <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer le mot de passe" name="password" required>

 <input type="submit" id='submit' value='LOGIN'>

 <A href='Inscription.php'><span>Inscrivez-Vous</span></a>
 
 
 </form>
 </div>
 </body>
</html>

