<?php
    session_start();

    $servername = 'localhost:3308';
    $username = 'root';
    $password = '';

    $mail = $_POST['email'];
    $pwd = $_POST['mdp'];
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    
    try{
        //On se connecte
        $conn = new PDO("mysql:host=$servername; ", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo "Erreur : ".$e->getMessage();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "use generator_cv";
        $conn->exec($sql);
        echo 'Connectée !';

        $sql_mail = "select mail from utilisateur where mail = '$mail'; ";
        $sth = $conn->prepare($sql_mail);
        $sth->execute();
        $result = $sth->fetch();

        if ($result == null){
            $_SESSION['mail_recup'] = "$mail";

            //insertion des données dans la bdd
            $sql = "INSERT INTO utilisateur(mail, mdp, prenom, nom, date_naissance, permis, numero_tel, linkedin, lien_site, photo_profil)
            VALUES('$mail', '$pwd', '$prenom', '$nom', '', '', '', '', '', '')";
            $conn->exec($sql);
            echo 'Donnée bien enregistré !';

            //envoie vers la bonne page après le traitement des données
            header('Location: Profil.php');
            exit();

        } else{
            $_SESSION['user_invalid'] = "Vous avez déjà un compte avec cette adresse mail";
            header('Location: ConnexionPage.php');
            exit();
        }
    }
    
?>