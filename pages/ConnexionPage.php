<?php 
session_start();

echo "
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css'>
    <link rel='stylesheet' href='../css/styleHafsa2.css'>
    <title>Modern Login Page </title>
</head>

    <body>

        <div class='container' id='container'>
            <div class='form-container sign-up'>
                <form name='monformulaire' method='POST' action='inscription.php'>
                    <h1 id='create'>Créer un compte</h1>
                    <input type='text' placeholder='Prénom' name='prenom'>
                    <input type='text' placeholder='Nom' name='nom'>
                    <input type='email' placeholder='Email' name='email'>
                    <input type='password' placeholder='Mot de passe' name='mdp'>
                    <button type='submit'>S'inscrire</button>
                </form>
            </div>
            <div class='form-container sign-in'>
                <form name='monformulaire' method='POST' action='connexion.php'>
                    <h1 id='connexion'>Se connecter à son compte  </h1>
                    <input type='email' placeholder='Email' name='email'>
                    <input type='password' placeholder='Mot de passe' name='mdp'>
                    <button type='submit'>Se connecter</button>
                </form>
            </div>
            <div class='toggle-container'>
                <div class='toggle'>
                    <div class='toggle-panel toggle-left'>
                        <h1>Bienvenue !</h1>
                        <p>Entrez vos informations personnelles</p>
                        <button class='hidden' id='login'>Se connecter</button>
                    </div>
                    <div class='toggle-panel toggle-right'>
                        <h1>Bonjour !</h1>
                        <p>Connectez vous pour créer votre CV.</p>
                        <button class='hidden' id='register'>S'inscrire</button>
                    </div>
                </div>
            </div>
        </div>

        <script src='../js/script.js'></script>
        ";
        if (isset($_SESSION['mdp_incorrect'])) {
            $message_pwd = $_SESSION['mdp_incorrect'];
            echo "
                <script>
                    alert('$message_pwd');
                </script>";
            unset ($_SESSION['mdp_incorrect']);
        };

        if (isset($_SESSION['user_invalid'])) {
            $message_mail = $_SESSION['user_invalid'];
            echo "
                <script>
                    alert('$message_mail');
                </script>";
            unset ($_SESSION['user_invalid']);
        };
        echo "
    </body>

</html>
";
?>