<?php
    session_start();

    $servername = 'localhost:3308';
    $username = 'root';
    $password = '';

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $date_naissance = $_POST['ddn'];
    $permis = $_POST['permis'];
    $numero_tel = $_POST['numTel'];
    $linkedin = $_POST['linkedin'];
    $lien_site = $_POST['lienSite'];
    $photo_profil = $_POST['photoProf'];
    
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

        if ($permis == "Oui"){
            $permis = 1;
        }
        else{
            $permis = 0;
        }
        
        if($prenom != ''){
            $sql = "UPDATE utilisateur
            SET prenom = '$prenom'
            WHERE mail = '$mail'";
            $conn->exec($sql);
        }

        if($nom != ''){
            $sql = "UPDATE utilisateur
            SET nom = '$nom'
            WHERE mail = '$mail'";
            $conn->exec($sql);
        }

        $sql = "UPDATE utilisateur
        SET date_naissance = '$date_naissance'
        WHERE mail = '$mail'";
        $conn->exec($sql);

        $sql = "UPDATE utilisateur
        SET permis = '$permis'
        WHERE mail = '$mail'";
        $conn->exec($sql);

        $sql = "UPDATE utilisateur
        SET numero_tel = '$numero_tel'
        WHERE mail = '$mail'";
        $conn->exec($sql);

        $sql = "UPDATE utilisateur
        SET linkedin = '$linkedin'
        WHERE mail = '$mail'";
        $conn->exec($sql);

        $sql = "UPDATE utilisateur
        SET lien_site = '$lien_site'
        WHERE mail = '$mail'";
        $conn->exec($sql);

        $sql = "UPDATE utilisateur
        SET photo_profil = '$photo_profil'
        WHERE mail = '$mail'";
        $conn->exec($sql);

        //envoie vers la bonne page après le traitement des données
        header('Location: Contenu.php');
        exit();
    }
?>