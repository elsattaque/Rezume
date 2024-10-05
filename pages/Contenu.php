<?php 
session_start();

echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styleHafsa1.css">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Contenu</title>
    </head>
    <body>
        <header>
            <img src="../img/Logo.png" alt="Logo" width="300px" height="auto">
            <h1 class="title">Contenu</h1>
        </header>
        <div class="container">
            <form name="monformulaire" method="POST" action="data_contenu.php">
                <div class="form-sections">
                    <div class="form-section form-section--titre" style="overflow: hidden;">
                        <div class="form-section__header" onclick="toggleContent()">
                            <div class="form-section__header-text">
                                <div class="form-section__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="#0d3b78" d="M254 52.8C249.3 40.3 237.3 32 224 32s-25.3 8.3-30 20.8L57.8 416H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32h-1.8l18-48H303.8l18 48H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H390.2L254 52.8zM279.8 304H168.2L224 155.1 279.8 304z"/>
                                    </svg>
                                </div>
                                <span class="span-title">Titre du CV</span>
                            </div>
                            <div>
                                <input name="title_cv" col="col-2" id="title_cv_Input" type="text" placeholder="par ex. Etudiant en informatique" label="Titre" autocomplete="off" maxlength="100" class="" value="" style="display: none;">
                            </div>
                        </div>
                        <div class="form__fields-group form__fields-group--buttons">
                            <!-- <button class="button--white button--save-section-item-titre" style="display: none;">
                                <div class="spinner--hidden"></div>
                                <div class="icon--visible">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                        <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                    </svg>
                                </div>
                                <span> Sauvegarder</span> 
                            </button> -->
                        </div>
                    </div>
                    <div class="form-section form-section--recherche" style="overflow: hidden;">
                        <div class="form-section__header" onclick="toggleContent1()">
                            <div class="form-section__header-text" >
                                <div class="form-section__header-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path fill="#0d3b78" d="M254 52.8C249.3 40.3 237.3 32 224 32s-25.3 8.3-30 20.8L57.8 416H32c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32h-1.8l18-48H303.8l18 48H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H390.2L254 52.8zM279.8 304H168.2L224 155.1 279.8 304z"/>
                                    </svg>                              
                                </div>
                                <span class="span-title">Titre de recherche</span>   
                            </div>
                        </div>
                        <div>
                            <input name="title_search" col="col-2" type="text" placeholder="par ex. Recherche d une alternance " label="Recherche" autocomplete="off" maxlength="100" class="" value="" style="display: none;">
                        </div>
                        <div class="form__fields-group form__fields-group--buttons">
                            <!-- <button class="button--white button--save-section-item-recherche" style="display: none;">
                                <div class="spinner--hidden"></div>
                                <div class="icon--visible">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                        <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                    </svg>
                                </div>
                                <span> Sauvegarder</span> 
                            </button> -->
                        </div>
                    </div>
                    <div class="form-section form-section--profile" style="overflow: hidden;">
                        <div class="form-section__header" onclick="toggleContent2()">
                            <div class="form-section__header-text">
                                <div class="form-section__header-icon">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z">
                                        </path>
                                    </svg>
                                </div>
                                <span class="span-title">Profil</span> 
                            </div>
                        </div>
                        <div class="form-section__fieldset">
                            <div class="form__row">
                                <div class="form__fields">
                                    <div>
                                        <input name="description_profil" col="col-2" type="text" placeholder="Description " label="Profil" autocomplete="off" maxlength="100" class="" value="" style="display: none;">
                                    </div>
                                </div>
                                </div>
                                <div class="form__fields-group form__fields-group--buttons">
                                    <!-- <button class="button--white button--save-section-item-profile" style="display: none;">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                            </svg>
                                        </div>
                                        <span> Sauvegarder</span> 
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-section form-section--formation" style="overflow: hidden;">
                        <div class="form-section__header">
                            <div class="form-section__header-text">
                                <div class="form-section__header-icon">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"></path>
                                    </svg>
                                </div>
                                <span class="span-title">Formation</span>  
                            </div>
                        </div>
                        <div>
                            <div class="form-section__fieldset" style="display: none;">
                                <div class="form-section__rows" id="insertFormation">
                                    <div class="form__row">
                                        <div>
                                            <div class="form__fields" style="display: block;">
                                                <div class="form__fields-group">
                                                    <div class="form-element col-2" name="position-education.nom_formation">
                                                        <label for="nom_formation" class="">Formation scolaire</label>
                                                        <div style="position: relative;">
                                                            <input name="nom_formation" col="col-2" type="text" placeholder="par ex. Gestion des entreprises" label="Formation scolaire" autocomplete="off" maxlength="100" class="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-element col-2" name="position-education.items[0].city">
                                                        <label for="items[0].city" class="">
                                                            Localité
                                                        </label>
                                                        <div style="position: relative;">
                                                            <input name="items[0].city" col="col-2" type="text" placeholder="par ex. Paris" label="Localité" autocomplete="off" maxlength="100" class="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group">
                                                    <div class="form-element col-1" name="position-education.items[0].institution">
                                                        <label for="items[0].institution" class="">
                                                            Etablissement d enseignement
                                                        </label>
                                                        <div style="position: relative;">
                                                            <input name="items[0].institution" col="col-1" type="text" placeholder="par ex. Université de Paris" label="Etablissement d enseignement" autocomplete="off" maxlength="100" class="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group col-2">
                                                    <div class="form-element col-2" name="position-education.items[0].startMonth">
                                                        <label class="">
                                                            Depuis
                                                        </label>
                                                        <select class="form-select-custom" name="education.items[0].startMonth">
                                                            <option value="">Ne pas montrer</option>
                                                            <option value="hidden">Année uniquement</option>
                                                            <option value="1">janvier</option>
                                                            <option value="2">février</option>
                                                            <option value="3">mars</option>
                                                            <option value="4">avril</option>
                                                            <option value="5">mai</option>
                                                            <option value="6">juin</option>
                                                            <option value="7">juillet</option>
                                                            <option value="8">août</option>
                                                            <option value="9">septembre</option>
                                                            <option value="10">octobre</option>
                                                            <option value="11">novembre</option>
                                                            <option value="12">décembre</option>
                                                        </select><i class="form-select-custom--arrow"></i>
                                                    </div>
                                                    <div class="form-element col-2" name="position-education.items[0].startYear">
                                                        <label class="">&nbsp;</label>
                                                        <select class="form-select-custom form__select-element" name="education.items[0].startYear">
                                                            <option value="2030">2030</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                        </select><i class="form-select-custom--arrow"></i>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group col-2">
                                                    <div class="form-element col-2" name="position-education.items[0].endMonth">
                                                        <label class="">
                                                            Jusqu à
                                                        </label>
                                                        <select class="form-select-custom" name="education.items[0].endMonth">
                                                            <option value="present">Présent</option>
                                                            <option value="">Ne pas montrer</option>
                                                            <option value="hidden">Année uniquement</option>
                                                            <option value="1">janvier</option>
                                                            <option value="2">février</option>
                                                            <option value="3">mars</option>
                                                            <option value="4">avril</option>
                                                            <option value="5">mai</option>
                                                            <option value="6">juin</option>
                                                            <option value="7">juillet</option>
                                                            <option value="8">août</option>
                                                            <option value="9">septembre</option>
                                                            <option value="10">octobre</option>
                                                            <option value="11">novembre</option>
                                                            <option value="12">décembre</option>
                                                        </select><i class="form-select-custom--arrow"></i>
                                                    </div>
                                                    <div class="form-element col-2" name="position-education.items[0].endYear">
                                                        <label class="">&nbsp;</label>
                                                        <select class="form-select-custom form__select-element" name="education.items[0].endYear">
                                                            <option value="2030">2030</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                        </select>
                                                        <i class="form-select-custom--arrow"></i>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group">
                                                    <div class="form-element col-1">
                                                        <label class="">Description</label>    
                                                    </div>
                                                    <textarea id="education_editor" name="education.items[0].description"></textarea>
                                                </div>
                                                <div class="form__fields-group form__fields-group--buttons">
                                                    <!-- <button class="button--white button--save-section-item">
                                                        <div class="spinner--hidden"></div>
                                                        <div class="icon--visible">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                                            </svg>
                                                        </div>
                                                        <span> Sauvegarder</span> 
                                                    </button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="button--grey button--add-section-item-0" onclick="addFormation()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="1em" width="1em">
                                        <path fill="#0d3b78" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                    </svg> 
                                    <span>Ajouter une formation</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-section form-section--experience" style="overflow: hidden;">
                        <div class="form-section__header">
                            <div class="form-section__header-text">
                                <div class="form-section__header-icon">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 16v-1H3.01L3 19c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2v-4h-7v1h-4zm10-9h-4.01V5l-2-2h-4l-2 2v2H4c-1.1 0-2 .9-2 2v3c0 1.11.89 2 2 2h6v-2h4v2h6c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-6 0h-4V5h4v2z"></path>
                                    </svg>
                                </div>
                                <span class="span-title">Expérience professionnelle</span> 
                            </div>
                        </div>
                        <div>
                            <div class="form-section__fieldset" style="display: none;">
                                <div class="form-section__rows" id="insertExperience">
                                    <div class="form__row">
                                        <div>
                                            <div class="form__fields" style="display: block;">
                                                <div class="form__fields-group">
                                                    <div class="form-element col-2" name="position-education.nom_formation">
                                                        <label for="nom_formation" class="">Expérience professionnelle</label>
                                                        <div style="position: relative;">
                                                            <input name="nom_formation" col="col-2" type="text" placeholder="par ex. Gestion des entreprises" label="Expérience professionnelle" autocomplete="off" maxlength="100" class="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-element col-2" name="position-education.items[0].city">
                                                        <label for="items[0].city" class="">
                                                            Localité
                                                        </label>
                                                        <div style="position: relative;">
                                                            <input name="items[0].city" col="col-2" type="text" placeholder="par ex. Paris" label="Localité" autocomplete="off" maxlength="100" class="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group">
                                                    <div class="form-element col-1" name="position-education.items[0].institution">
                                                        <label for="items[0].institution" class="">
                                                            Nom de l"entreprise
                                                        </label>
                                                        <div style="position: relative;">
                                                            <input name="items[0].institution" col="col-1" type="text" placeholder="par ex. Université de Paris" label="Etablissement d enseignement" autocomplete="off" maxlength="100" class="" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group col-2">
                                                    <div class="form-element col-2" name="position-education.items[0].startMonth">
                                                        <label class="">
                                                            Depuis
                                                        </label>
                                                        <select class="form-select-custom" name="education.items[0].startMonth">
                                                            <option value="">Ne pas montrer</option>
                                                            <option value="hidden">Année uniquement</option>
                                                            <option value="1">janvier</option>
                                                            <option value="2">février</option>
                                                            <option value="3">mars</option>
                                                            <option value="4">avril</option>
                                                            <option value="5">mai</option>
                                                            <option value="6">juin</option>
                                                            <option value="7">juillet</option>
                                                            <option value="8">août</option>
                                                            <option value="9">septembre</option>
                                                            <option value="10">octobre</option>
                                                            <option value="11">novembre</option>
                                                            <option value="12">décembre</option>
                                                        </select><i class="form-select-custom--arrow"></i>
                                                    </div>
                                                    <div class="form-element col-2" name="position-education.items[0].startYear">
                                                        <label class="">&nbsp;</label>
                                                        <select class="form-select-custom form__select-element" name="education.items[0].startYear">
                                                            <option value="2030">2030</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                        </select><i class="form-select-custom--arrow"></i>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group col-2">
                                                    <div class="form-element col-2" name="position-education.items[0].endMonth">
                                                        <label class="">
                                                            Jusqu à
                                                        </label>
                                                        <select class="form-select-custom" name="education.items[0].endMonth">
                                                            <option value="present">Présent</option>
                                                            <option value="">Ne pas montrer</option>
                                                            <option value="hidden">Année uniquement</option>
                                                            <option value="1">janvier</option>
                                                            <option value="2">février</option>
                                                            <option value="3">mars</option>
                                                            <option value="4">avril</option>
                                                            <option value="5">mai</option>
                                                            <option value="6">juin</option>
                                                            <option value="7">juillet</option>
                                                            <option value="8">août</option>
                                                            <option value="9">septembre</option>
                                                            <option value="10">octobre</option>
                                                            <option value="11">novembre</option>
                                                            <option value="12">décembre</option>
                                                        </select><i class="form-select-custom--arrow"></i>
                                                    </div>
                                                    <div class="form-element col-2" name="position-education.items[0].endYear">
                                                        <label class="">&nbsp;</label>
                                                        <select class="form-select-custom form__select-element" name="education.items[0].endYear">
                                                            <option value="2030">2030</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001">2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                        </select>
                                                        <i class="form-select-custom--arrow"></i>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group">
                                                    <div class="form-element col-1">
                                                        <label class="">Description</label>    
                                                    </div>
                                                    <textarea id="education_editor" name="education.items[0].description"></textarea>
                                                </div>
                                                <div class="form__fields-group form__fields-group--buttons">
                                                    <!-- <button class="button--white button--save-section-item">
                                                        <div class="spinner--hidden"></div>
                                                        <div class="icon--visible">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                                            </svg>
                                                        </div>
                                                        <span> Sauvegarder</span> 
                                                    </button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="button--grey button--add-section-item-1" onclick="addExperience()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="1em" width="1em">
                                        <path fill="#0d3b78" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                    </svg> 
                                    <span>Ajouter une expérience</span> 
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-section form-section--skill" style="overflow: hidden;">
                        <div class="form-section__header">
                            <div class="form-section__header-text">
                                <div class="form-section__header-icon">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13 1.07V9h7c0-4.08-3.05-7.44-7-7.93zM4 15c0 4.42 3.58 8 8 8s8-3.58 8-8v-4H4v4zm7-13.93C7.05 1.56 4 4.92 4 9h7V1.07z"></path>
                                    </svg>
                                </div>
                                <span class="span-title">Compétences</span> 
                            </div>
                        </div>
                        <div>
                            <div class="form-section__fieldset" style="display: none;">
                                    <div class="form-section__rows" id="insertSkill">
                                        <div class="form__row">
                                            <div class="form__fields" style="display: block;">
                                                <div class="form__fields-group">
                                                    <div class="form-element col-2" name="position-skill.nom_formation">
                                                        <label for="nom_formation" class="">Compétence</label>
                                                        <div style="position: relative;">
                                                            <input id="SkillInput" name="nom_formation" col="col-2" type="text" label="Compétence" maxlength="50" autocomplete="off" placeholder="par ex. Microsoft Word" class="" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-element col-2" name="position-skill.items[0].level">
                                                        <label class="">Niveau</label>
                                                        <select id="SkillLevel" class="form-select-custom" name="skill.items[0].level">
                                                            <option value="0">Sélectionnez</option>
                                                            <option value="100">Très bon</option>
                                                            <option value="75">Bon</option>
                                                            <option value="50">Satisfaisant</option>
                                                            <option value="25">Intermédiaire</option>
                                                            <option value="20">Débutant</option>
                                                        </select>
                                                        <i class="form-select-custom--arrow"></i>
                                                    </div>
                                                </div>
                                                <div class="form__fields-group form__fields-group--buttons">
                                                    <!-- <button class="button--white button--save-section-item">
                                                        <div class="spinner--hidden"></div>
                                                        <div class="icon--visible">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                                            </svg>
                                                        </div>
                                                        <span> Sauvegarder</span> 
                                                    </button> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="button--grey button--add-section-item-2" onclick="addSkill()">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="1em" width="1em">
                                            <path fill="#0d3b78" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                        </svg> 
                                        <span>Ajouter une compétence</span>
                                    </button>
                            </div>
                        </div>
                    </div>
                    <div class="form-section form-section--language" style="overflow: hidden;">
                        <div class="form-section__header">
                            <div class="form-section__header-text">
                                <div class="form-section__header-icon">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="20px" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path>
                                    </svg>
                                </div>
                                <span class="span-title">Langues</span> 
                            </div>
                        </div>
                        <div>
                            <div class="form-section__fieldset" style="display: none;">
                                <div class="form-section__rows"  id="insertLanguage">
                                    <div class="form__row">
                                        <div class="form__fields" style="display: block;">
                                            <div class="form__fields-group">
                                                <div class="form-element col-2" name="position-language.nom_formation">
                                                    <label for="nom_formation" class="">Langue</label>
                                                    <div style="position: relative;">
                                                        <input  name="nom_formation" col="col-2" type="text" placeholder="par ex. Anglais" label="Langue" autocomplete="off" maxlength="100" class="" value="">
                                                    </div>
                                                </div>
                                                <div class="form-element col-2" name="position-language.items[0].level">
                                                    <label class="">
                                                        Niveau
                                                    </label>
                                                    <select class="form-select-custom" name="language.items[0].level">
                                                        <option value="0">Sélectionnez</option>
                                                        <option value="100">Langue maternelle</option>
                                                        <option value="75">Courant</option>
                                                        <option value="50">Satisfaisant</option>
                                                        <option value="25">Moyen</option>
                                                        <option value="20">Notions de base</option>
                                                        <option value="120">A1</option>
                                                        <option value="130">A2</option>
                                                        <option value="140">B1</option>
                                                        <option value="160">B2</option>
                                                        <option value="180">C1</option>
                                                        <option value="200">C2</option>
                                                    </select>
                                                    <i class="form-select-custom--arrow"></i>
                                                </div>
                                            </div>
                                            <div class="form__fields-group form__fields-group--buttons">
                                                <!-- <button class="button--white button--save-section-item">
                                                    <div class="spinner--hidden"></div>
                                                    <div class="icon--visible">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                            <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                                        </svg>
                                                    </div>
                                                    <span> Sauvegarder</span> 
                                                </button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="button--grey button--add-section-item-3" onclick="addLanguage()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" height="1em" width="1em">
                                        <path fill="#0d3b78" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                                    </svg> 
                                    <span>Ajouter une langue</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="NextBtn">Etape suivante</button>
                </div>
            </form>
        </div>
        <script src="../js/script2.js"></script>
        <script>
            function toggleContent() {
                var inputField = document.querySelector(`input[name="title_cv"]`);
                // var saveButton = document.querySelector(".button--white.button--save-section-item-titre");

                if (inputField.style.display === "none") {
                    inputField.style.display = "block";
                    // saveButton.style.display = "block";
                } else {
                    inputField.style.display = "none";
                    // saveButton.style.display = "none";
                }
                document.getElementById("title_cv_Input").addEventListener("click", function(event) {
                    event.stopPropagation();
                });
            }

            function toggleContent1(){
                var inputField = document.querySelector(`input[name="title_search"]`);
                // var saveButton = document.querySelector(".button--white.button--save-section-item-recherche");

                if (inputField.style.display === "none") {
                    inputField.style.display = "block";
                    // saveButton.style.display = "block";
                } else {
                    inputField.style.display = "none";
                    // saveButton.style.display = "none";
                }

            }
            function toggleContent2() {
                var inputField = document.querySelector(`input[name="description_profil"]`);
                // var saveButton = document.querySelector(".button--white.button--save-section-item-profile");

                if (inputField.style.display === "none") {
                    inputField.style.display = "block";
                    // saveButton.style.display = "block";
                } else {
                    inputField.style.display = "none";
                    // saveButton.style.display = "none";
                }
            }

            document.addEventListener("DOMContentLoaded", function() {
                var formationSection = document.querySelector(".form-section--formation");
                var header = formationSection.querySelector(".form-section__header");
                var fieldset = formationSection.querySelector(".form-section__fieldset");
                
                header.addEventListener("click", function() {
                    if (fieldset.style.display === "none") {
                        fieldset.style.display = "block";
                    }else {
                        fieldset.style.display = "none";
                    }
                });
            });
            document.addEventListener("DOMContentLoaded", function() {
                var experienceSection = document.querySelector(".form-section--experience");
                var header = experienceSection.querySelector(".form-section__header");
                var fieldset = experienceSection.querySelector(".form-section__fieldset");
                
                header.addEventListener("click", function() {
                    if (fieldset.style.display === "none") {
                        fieldset.style.display = "block";
                    }else {
                        fieldset.style.display = "none";
                    }
                });
            });
            document.addEventListener("DOMContentLoaded", function(){
                var skillSection = document.querySelector(".form-section--skill");
                var header = skillSection.querySelector(".form-section__header");
                var fieldset = skillSection.querySelector(".form-section__fieldset");

                header.addEventListener("click", function(){
                    if (fieldset.style.display === "none") {
                        fieldset.style.display = "block";
                    } else {
                        fieldset.style.display = "none";
                    } 
                });
            });
            document.addEventListener("DOMContentLoaded", function(){
                var languageSection = document.querySelector(".form-section--language");
                var header = languageSection.querySelector(".form-section__header");
                var fieldset = languageSection.querySelector(".form-section__fieldset");

                header.addEventListener("click", function(){
                    if (fieldset.style.display === "none") {
                        fieldset.style.display = "block";
                    } else {
                        fieldset.style.display = "none";
                    } 
                });
            });

        function deleteLangue() {
            const parent = document.getElementById("section-rows-delete").remove();
        }
        function deleteSkill() {
            const parent = document.getElementById("section-rows-delete").remove();
        }
        function deleteExperience() {
            const parent = document.getElementById("section-rows-delete").remove();
        }
        function deleteFormation() {
            const parent = document.getElementById("section-rows-delete").remove();
        }


        </script>
    </body>
    ';
?>