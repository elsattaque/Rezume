<?php
session_start();

echo"
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Profil</title>
    <link href='../css/styleElsa.css' rel='stylesheet' type='text/css' />
    <script type='text/javascript' src ='../js/script.js'></script>
</head>
<header></header>
<body>
    <main>
        <div>
            <h1 style='    
            color: #021C3F;
            font-family: 'Playfair Display', serif;
            font-style:inherit;
            font-weight: 200;'>Profil</h1>
            
            <form name='monformulaire' method='POST' action='data_profil.php'>
                <div class='form-container' style='margin-bottom: 20px;'>
                    <div class='container-line'>
                        <label for='file'></label>
                        <input type='file' id='file' name='photoProf'/>
                    </div>
                    <div class='container-line1' style='
                    display: inline-flex;
                    flex-direction: column;
                    flex-wrap: wrap;
                    height: 500px;
                    '>
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Prénom</p>
                            <input type='text' name='prenom' style='width: 270px;
                            height: 35px;'/>
                        </div>
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Nom</p>
                            <input type='text' name='nom' style='width: 270px;
                            height: 35px;'/>
                        </div>
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Ville</p>
                            <input type='text' name='ville' style='width: 270px;
                            height: 35px;'/>
                        </div>
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Nationalité</p>
                            <input type='text' name='pays' style='width: 270px;
                            height: 35px;'/>
                        </div>
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Linkedin</p>
                            <input type='text' name='linkedin' style='width: 270px;
                            height: 35px;'/>
                        </div>
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Numéro de téléphone</p>
                            <input type='tel' name='numTel' style='width: 270px;
                            height: 35px;'/>
                        </div>
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Date de naissance</p>
                            <input type='date' name='ddn' style='width: 270px;
                            height: 35px;'/>
                        </div>                        
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Permis</p>
                            <div>
                                <input type='radio' name='permis' value='Oui' checked/>
                                <label for='Oui'>Oui</label>
                            </div>
                            <div>
                                <input type='radio' name='permis' value='Non'/>
                                <label for='Non'>Non</label>
                            </div>
                        </div>
                        <div>
                            <p style='
                            text-align: center;
                            margin-top: 0%;
                            color: #0d3b78;
                            font-family: 'Playfair Display', serif;
                            font-style:inherit;
                            font-weight: 200;
                        '>Site internet</p>
                            <input type='text' name='lienSite' style='width: 270px;
                            height: 35px;'></input>
                        </div>
                    </div>
                </div>
                <div>
                    <button type='submit' class='NextBtn'>Étape suivante</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
";
?>
