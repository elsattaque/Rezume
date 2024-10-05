<?php
    session_start();
    
    $servername = 'localhost:3308';
    $username = 'root';
    $password = '';

    $mail = $_POST['email'];
    $pwd = $_POST['mdp'];
    
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

        $sql_pwd = "select mdp from utilisateur where mail = '$mail'; ";
        $mdp = $conn->prepare($sql_pwd);
        $mdp->execute();
        $result_pwd = $mdp->fetch();

        $sql_mail = "select mail from utilisateur where mail = '$mail'; ";
        $sth = $conn->prepare($sql_mail);
        $sth->execute();
        $result_mail = $sth->fetch();
        
        if (($result_pwd && $result_pwd['mdp'] == $pwd) || ($result_mail && $result_mail['mail'] == $mail)) {
            $_SESSION['mail_recup'] = "$mail";

            //envoie vers la bonne page après le traitement des données
            header('Location: Profil.php');
            exit();
        } else {
            $_SESSION['mdp_incorrect'] = "Votre mot de passe ou adresse mail est incorrect";
            header('Location: ConnexionPage.php');
            exit();
        }
    }
?>