<?php
    session_start();
    
    $servername = 'localhost:3308';
    $username = 'root';
    $password = '';
    
    try{
        //On se connecte
        $conn = new PDO("mysql:host=$servername; ", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    catch(PDOException $e){
        echo "Erreur : ".$e->getMessage();
    }

    $mail = $_SESSION['mail_recup'];

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $sql = "use generator_cv";
        $conn->exec($sql);

        $sql_pwd = "select mdp from utilisateur where mail = '$mail'; ";
        $mdp = $conn->prepare($sql_pwd);
        $mdp->execute();
        $result_pwd = $mdp->fetch();
        
    }
    //envoie vers la bonne page après le traitement des données
    header('Location: TéléchargementCV.php');
    exit();
?>