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

    $sql = "use generator_cv";
    $conn->exec($sql);

    $sql_requ = "SELECT titre_cv, titre_recherche, desc_prof FROM cv JOIN utilisateur using(Id_utilisateur) where mail = '$mail' ORDER BY `Id_cv` DESC LIMIT 1; ";
    $sth = $conn->prepare($sql_requ);
    $sth->execute();
    $result = $sth->fetch();

    $titre_cv = $result[0];
    $titre_recherche = $result[1];
    $desc_prof = $result[2];

    $sql_requ = "SELECT mail, prenom, nom from utilisateur where mail = '$mail'; ";
    $sth = $conn->prepare($sql_requ);
    $sth->execute();
    $result_utilisateur = $sth->fetch();

    $mail = $result_utilisateur[0];
    $prenom = $result_utilisateur[1];
    $nom = $result_utilisateur[2];
?>

<?php
    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/styleHafsa2.css">
            <title>Download CV</title>
        </head>
        <body>
            <h1>';echo $titre_cv;echo '</h1>
            <h2>';echo $titre_recherche;echo '</h2>
            <p>';echo $desc_prof;echo '</p>
            <h3>Contact</h3>
            <p>';echo $prenom; echo ' '; echo $nom;echo '</p>
            <p>Email: ';echo $mail;echo '</p>
        </body>
        </html>
    ';
?>