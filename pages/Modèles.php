<?php 
    session_start();

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Modèles</title>
        <link href='../css/styleElsa.css' rel='stylesheet' type='text/css' />

        <!-- POLICE -->
        <link href='https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap' rel='stylesheet'>
    </head>
    <header></header><!-- css à import pour le logo  -->
    <body>
        <main>
            <form name='monformulaire' method='POST' action='data_modeles.php'>
                <div>
                    <h1>Choisissez votre modèle</h1>

                    <div class='container'>
                        <button class='circle-container' name='color1'>
                            <div class='circle'></div>
                            <div class='circle'></div>
                            <div class='circle'></div>
                        </button>
                        <button class='circle-container' name='color2'>
                            <div class='circle'></div>
                            <div class='circle'></div>
                            <div class='circle'></div>
                        </button>
                        <button class='circle-container' name='color3'>
                            <div class='circle'></div>
                            <div class='circle'></div>
                            <div class='circle'></div>
                        </button>
                    </div>

                    <button class='modele-container' name='modele1'>
                        <img src='../img/CVmodele1.png'>
                        <p class='modele'>Modèle 1</p>
                    </button>
                    <button class='modele-container' name='modele2'>
                        <img src='../img/CVmodele2.jpg'>
                        <p class='modele'>Modèle 2</p>
                    </button>

                    <div>
                        <button type='submit'>Étape suivante</button>
                    </div>
                </div>
                <script>
                </script>
            </form>
        </main>
    </body>
    </html>
    ";
?>