function addLanguage() {       
    var newLanguageElement = document.getElementById('insertLanguage');
    newLanguageElement.insertAdjacentHTML("afterend", 
    `
                    <div class="form-section__rows" id="section-rows-delete" >
                        <div class="form__row">
                            <div class="form__fields" style="display: block;">
                                <div class="form__fields-group">
                                    <div class="form-element col-2" name="position-language.items[0].name">
                                        <label for="items[0].name" class="">Langue</label>
                                        <div style="position: relative;">
                                            <input name="items[0].name" col="col-2" type="text" placeholder="par ex. Anglais" label="Langue" autocomplete="off" maxlength="100" class="" value="">
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
                                    <button class="button--white button--save-section-item">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                            </svg>
                                        </div>
                                        <span> Sauvegarder</span> 
                                    </button>
                                    <button class="button--white button--save-section-item" onclick="deleteLangue()">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                            </svg>
                                        </div>
                                        <span> Supprimer</span> 
                                    </button>
                                </div>
                            </div>
                        </div>
                        `);
}

function addSkill() {       
var newSkillElement = document.getElementById('insertSkill');
newSkillElement.insertAdjacentHTML("afterend", 
`
                    <div class="form-section__rows" id="section-rows-delete">
                        <div class="form__row">
                            <div class="form__fields" style="display: block;">
                                <div class="form__fields-group">
                                    <div class="form-element col-2" name="position-skill.items[0].name">
                                        <label for="items[0].name" class="">Compétence</label>
                                        <div style="position: relative;">
                                            <input id="SkillInput" name="items[0].name" col="col-2" type="text" label="Compétence" maxlength="50" autocomplete="off" placeholder="par ex. Microsoft Word" class="" value="">
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
                                    <button class="button--white button--save-section-item">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                            </svg>
                                        </div>
                                        <span> Sauvegarder</span> 
                                    </button>   
                                    <button class="button--white button--save-section-item" onclick="deleteSkill()">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                            </svg>
                                        </div>
                                        <span> Supprimer</span> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    `);
}
function addExperience() {       
var newSkillElement = document.getElementById('insertExperience');
newSkillElement.insertAdjacentHTML("afterend", 
`
<div class="form-section__rows" id="section-rows-delete">
                    <div class="form__row">
                        <div>
                            <div class="form__fields" style="display: block;">
                                <div class="form__fields-group">
                                    <div class="form-element col-2" name="position-education.items[0].name">
                                        <label for="items[0].name" class="">Expérience professionnelle</label>
                                        <div style="position: relative;">
                                            <input name="items[0].name" col="col-2" type="text" placeholder="par ex. Gestion des entreprises" label="Expérience professionnelle" autocomplete="off" maxlength="100" class="" value="">
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
                                            Nom de l'entreprise
                                        </label>
                                        <div style="position: relative;">
                                            <input name="items[0].institution" col="col-1" type="text" placeholder="par ex. Université de Paris" label="Etablissement d'enseignement" autocomplete="off" maxlength="100" class="" value="">
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
                                            Jusqu'à
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
                                    <button class="button--white button--save-section-item">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                            </svg>
                                        </div>
                                        <span> Sauvegarder</span> 
                                    </button>
                                    <button class="button--white button--save-section-item" onclick="deleteExperience()">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                            <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                        </svg>
                                    </div>
                                    <span> Supprimer</span> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    `);
}
function addFormation() {       
var newSkillElement = document.getElementById('insertFormation');
newSkillElement.insertAdjacentHTML("afterend", 
`
<div class="form-section__rows" id="section-rows-delete">
                    <div class="form__row">
                        <div>
                            <div class="form__fields" style="display: block;">
                                <div class="form__fields-group">
                                    <div class="form-element col-2" name="position-education.items[0].name">
                                        <label for="items[0].name" class="">Formation scolaire</label>
                                        <div style="position: relative;">
                                            <input name="items[0].name" col="col-2" type="text" placeholder="par ex. Gestion des entreprises" label="Formation scolaire" autocomplete="off" maxlength="100" class="" value="">
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
                                            Etablissement d'enseignement
                                        </label>
                                        <div style="position: relative;">
                                            <input name="items[0].institution" col="col-1" type="text" placeholder="par ex. Université de Paris" label="Etablissement d'enseignement" autocomplete="off" maxlength="100" class="" value="">
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
                                            Jusqu'à
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
                                    <button class="button--white button--save-section-item">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                                <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                            </svg>
                                        </div>
                                        <span> Sauvegarder</span> 
                                    </button>
                                    <button class="button--white button--save-section-item" onclick="deleteFormation()">
                                        <div class="spinner--hidden"></div>
                                        <div class="icon--visible">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="1em" width="1em">
                                            <path fill="#0d3b78" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V173.3c0-17-6.7-33.3-18.7-45.3L352 50.7C340 38.7 323.7 32 306.7 32H64zm0 96c0-17.7 14.3-32 32-32H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V128zM224 288a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                                        </svg>
                                    </div>
                                    <span> Supprimer</span> 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                `);
}