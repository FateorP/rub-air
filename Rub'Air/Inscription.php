<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
include('_db/connexionDB.php');

if (isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

if (!empty($_POST)) {
    extract($_POST);
    $valid = true;

    if (isset($_POST['forminscription'])) {
        $pseudo = htmlentities(trim($pseudo)); // On récupère le pseudo
        $mail = htmlentities(strtolower(trim($mail))); // On récupère le mail
        $mail2 = htmlentities(strtolower(trim($mail2))); // On récupère la confirmation du mail
        $mdp = trim($mdp); // On récupère le mot de passe
        
        if (isset($_POST['mdp2'])) {
            $mdp2 = trim($_POST['mdp2']); // On récupère la confirmation du mot de passe
        }
        
        // Vérification du pseudo
        if (empty($pseudo)) {
            $valid = false;
            $er_pseudo = "Le pseudo ne peut pas être vide";
        }

        // Vérification du mail
if (empty($mail)) {
   $valid = false;
   $er_mail = "Le mail ne peut pas être vide";
} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
   $valid = false;
   $er_mail = "Le format du mail est invalide";
} else {
   // On vérifie que le mail n'existe pas déjà dans la base de données
   $req_mail = $BD->prepare("SELECT mail FROM utilisateur WHERE mail = ?");
   $req_mail->execute(array($mail));
   $existing_mail = $req_mail->fetch();

   if ($existing_mail) {
       $valid = false;
       $er_mail = "Ce mail existe déjà";
   }
}


        // Vérification de la confirmation du mail
        if (empty($mail2)) {
            $valid = false;
            $er_mail2 = "La confirmation du mail ne peut pas être vide";
        } elseif ($mail != $mail2) {
            $valid = false;
            $er_mail2 = "La confirmation du mail ne correspond pas";
        }

        // Vérification du mot de passe
        if (empty($mdp)) {
            $valid = false;
            $er_mdp = "Le mot de passe ne peut pas être vide";
        } elseif ($mdp != $mdp2) {
            $valid = false;
            $er_mdp = "La confirmation du mot de passe ne correspond pas";
        }

        // Si toutes les conditions sont remplies, on fait le traitement
        if ($valid) {
            $mdp = password_hash($mdp, PASSWORD_DEFAULT); // On hache le mot de passe
            $date_creation_compte = date('Y-m-d H:i:s');

            // On insère les données dans la table utilisateur
            $BD->prepare("INSERT INTO utilisateur (pseudo, mail, mdp, date_creation_compte) VALUES (?, ?, ?, ?)")->execute(array($pseudo, $mail, $mdp, $date_creation_compte));

            header('Location: index.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" type="text/css" href="inscription.css">
</head>
<body>
    <div id="container">
        <h1>Inscription</h1>
        <form method="POST" action="">
            <label for="pseudo"><b>Pseudo :</b></label>
            <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
            <?php if(isset($er_pseudo)) { echo '<span class="erreur" style="color: red;">'.$er_pseudo.'</span>'; } ?>

            <label for="mail"><b>Mail :</b></label>
            <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
            <?php if(isset($er_mail)) { echo '<span class="erreur" style="color: red;">'.$er_mail.'</span>'; } ?>

            <label for="mail2"><b>Confirmation du mail :</b></label>
            <input type="email" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
            <?php if(isset($er_mail2)) { echo '<span class="erreur" style="color: red;">'.$er_mail2.'</span>'; } ?>

            <label for="mdp"><b>Mot de passe :</b></label>
            <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
            <?php if(isset($er_mdp)) { echo '<span class="erreur" style="color: red;">'.$er_mdp.'</span>'; } ?>

            <label for="mdp2"><b>Confirmation du mot de passe :</b></label>
            <input type="password" placeholder="Confirmez votre mot de passe" id="mdp2" name="mdp2" />

            <input type="submit" name="forminscription" value="Je m'inscris" />
        </form>
    </div>
</body>
</html>
