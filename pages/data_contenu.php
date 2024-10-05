<?php
    session_start();

    $servername = 'localhost:3308';
    $username = 'root';
    $password = '';

    $titre_cv = $_POST['title_cv'];
    $titre_recherche = $_POST['title_search'];
    $desc_prof = $_POST['description_profil'];

    $nom_form = $_POST['nom_formation'];
    
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

        $sql_mail = "SELECT id_utilisateur FROM utilisateur WHERE mail = '$mail'; ";
        $sth = $conn->prepare($sql_mail);
        $sth->execute();
        $id_utilisateur = $sth->fetch();

        $sql = "INSERT INTO cv(titre_cv, titre_recherche, desc_prof, id_utilisateur)
        VALUES('$titre_cv', '$titre_recherche', '$desc_prof', '$id_utilisateur[0]')";
        $conn->exec($sql);

        // envoie vers la bonne page après le traitement des données
        header('Location: TéléchargementCV.php');
        exit();
    }
?>