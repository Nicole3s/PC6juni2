<?php echo validation_errors(); ?>

<?php echo form_open('registreer/registreer');
$this->load->helper('form');?>
<div id="registreer">
    <div id="promotie">
    <h2>Registratie</h2>

    <h5>Persoonsgegevens</h5>

    <p>
        <label for="nickname">Nickname</label>
        <input type="text" name="nickname" value="<?php echo set_value('nickname'); ?>" size="50" />
    </p>

    <p>
        <label for="voornaam">Voornaam</label>
        <input type="text" name="voornaam" value="<?php echo set_value('voornaam'); ?>" size="50" >
    </p>

    <p>
        <label for="tussenvoegsel">Tussenvoegsel</label>
        <input type="text" name="tussenvoegsel" value="<?php echo set_value('tussenvoegsel'); ?>" size="50" >
    </p>

    <p>
        <label for="achternaam">Achternaam</label>
        <input type="text" name="achternaam" value="<?php echo set_value('achternaam'); ?>" size="50" >
    </p>

    <p>
        <label for="password">Wachtwoord</label>
        <input type="password" name="password" value="" size="50" />
    </p>

    <p>
        <label for="passconf">Wachtwoord Bevestiging</label>
        <input type="password" name="passconf" value="" size="50" />
    </p>

    <p>
        <label for="email">Email Adres</label>
        <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
    </p>

    <p>
        <label for="geslacht">Geslacht</label>
        <select id="geslacht" name="geslacht">
            <option value="man" <?php echo  set_select('geslacht', 'man', TRUE); ?>>Man</option>
            <option value="vrouw" <?php echo  set_select('geslacht', 'vrouw'); ?>>Vrouw</option>
        </select>
    </p>

    <p>
        <label for="geboortedatum">Geboortedatum (JJJJ-MM-DD)</label>
        <input type="date" name="geboortedatum" value="<?php echo set_value('geboortedatum'); ?>" size="50"><br>
    </p>

    <p>
    <h5>Beschrijving</h5>
    <textarea id="beschrijving" name="beschrijving" rows="4" cols="50"> <?php echo set_value('beschrijving'); ?></textarea>
    </p>

    <p>
        <label for="geslachtsvoorkeur">Geslachtsvoorkeur</label>
        <select id="geslachtsvoorkeur" name="geslachtsvoorkeur">
            <option value="man" <?php echo  set_select('geslachtsvoorkeur', 'man', TRUE); ?>>Man</option>
            <option value="vrouw" <?php echo  set_select('geslachtsvoorkeur', 'vrouw'); ?>>Vrouw</option>
            <option value="beide" <?php echo  set_select('geslachtsvoorkeur', 'beide'); ?>>Beide</option>
        </select>
    </p>

    <h5>Leeftijdsvoorkeuren:</h5>

    <p>
        <label for="minleeftijd">Minimum leeftijd</label>
        <input id="minleeftijd" type="number" name="minleeftijd" value="<?php echo set_value('minleeftijd'); ?>" size="50" min="18" step="1">
    </p>

    <p>
        <label for="maxleeftijd">Maximum leeftijd</label>
        <input id="maxleeftijd" type="number" name="maxleeftijd" value="<?php echo set_value('maxleeftijd'); ?>" size="50" min="18" step="1">
    </p>
</div>
    <label>Ik heb een voorkeur voor deze merken</label>
    <div id="check_list">
        <input id="brand_CocaCola" type="checkbox" name="brands[]" value="CocaCola" <?php echo set_checkbox('brands[]', 'CocaCola'); ?>></label for="brand_CocaCola">CocaCola</label><br>
        <input id="brand_Pepsi" type="checkbox" name="brands[]" value="Pepsi" <?php echo set_checkbox('brands[]', 'Pepsi'); ?>><label for="brand_Pepsi">Pepsi</label><br>
        <input id="brand_Google" type="checkbox" name="brands[]" value="Google" <?php echo set_checkbox('brands[]', 'Google'); ?>><label for="brand_Google">Google</label><br>
        <input id="brand_Disney" type="checkbox" name="brands[]" value="Disney" <?php echo set_checkbox('brands[]', 'Disney'); ?>><label for="brand_Disney">Disney</label><br>
        <input id="brand_Sony" type="checkbox" name="brands[]" value="Sony" <?php echo set_checkbox('brands[]', 'Sony'); ?>><label for="brand_Sony">Sony</label><br>
        <input id="brand_Dell" type="checkbox" name="brands[]" value="Dell" <?php echo set_checkbox('brands[]', 'Dell'); ?>><label for="brand_Dell">Dell</label><br>
        <input id="brand_Bing" type="checkbox" name="brands[]" value="Bing" <?php echo set_checkbox('brands[]', 'Bing'); ?>><label for="brand_Bing">Bing</label><br>
        <input id="brand_Canon" type="checkbox" name="brands[]" value="Canon" <?php echo set_checkbox('brands[]', 'Canon'); ?>><label for="brand_Canon">Canon</label><br>
        <input id="brand_Nikon'" type="checkbox" name="brands[]" value="Nikon" <?php echo set_checkbox('brands[]', 'Nikon'); ?>><label for="brand_Nikon">Nikon</label><br>
        <input id="brand_Toshiba" type="checkbox" name="brands[]" value="Toshiba" <?php echo set_checkbox('brands[]', 'Toshiba'); ?>><label for="brand_Toshiba">Toshiba</label><br>
        <input id="brand_HBO" type="checkbox" name="brands[]" value="HBO" <?php echo set_checkbox('brands[]', 'HBO'); ?>><label for="brand_HBO">HBO</label><br>
        <input id="brand_H&M" type="checkbox" name="brands[]" value="H&M" <?php echo set_checkbox('brands[]', 'H&M'); ?>><label for="brand_H&M">H&amp;M</label><br>
        <input id="brand_Puma" type="checkbox" name="brands[]" value="Puma" <?php echo set_checkbox('brands[]', 'Puma'); ?>><label for="brand_Puma">Puma</label><br>
        <input id="brand_Nike" type="checkbox" name="brands[]" value="Nike" <?php echo set_checkbox('brands[]', 'Nike'); ?>><label for="brand_Nike">Nike</label><br>
        <input id="brand_Shell" type="checkbox" name="brands[]" value="Shell" <?php echo set_checkbox('brands[]', 'Shell'); ?>><label for="brand_Shell">Shell</label><br>
        <input id="brand_VW" type="checkbox" name="brands[]" value="VW" <?php echo set_checkbox('brands[]', 'VW'); ?>><label for="brand_VW">VW</label><br>
        <input id="brand_McDonalds" type="checkbox" name="brands[]" value="McDonalds" <?php echo set_checkbox('brands[]', 'McDonalds'); ?>><label for="McDonalds">McDonalds</label><br>
        <input id="brand_Burger King" type="checkbox" name="brands[]" value="Burger King" <?php echo set_checkbox('brands[]', 'Burger King'); ?>><label for="brand_Burger King">Burger King</label><br>
        <input id="brand_Calvin Klein" type="checkbox" name="brands[]" value="Calvin Klein" <?php echo set_checkbox('brands[]', 'Calvin Klein'); ?>><label for="brand_Calvin Klein">Calvin Klein</label><br>
        <input id="brand_Audi" type="checkbox" name="brands[]" value="Audi" <?php echo set_checkbox('brands[]', 'Audi'); ?>><label for="brand_Audi">Audi</label><br>
        <input id="brand_Spotify" type="checkbox" name="brands[]" value="Spotify" <?php echo set_checkbox('brands[]', 'Spotify'); ?>><label for="brand_Spotify">Spotify</label><br>
        <input id="brand_Twitter" type="checkbox" name="brands[]" value="Twitter" <?php echo set_checkbox('brands[]', 'Twitter'); ?>><label for="brand_Twitter">Twitter</label><br>
        <input id="brand_Instagram" type="checkbox" name="brands[]" value="Instagram" <?php echo set_checkbox('brands[]', 'Instagram'); ?>><label for="brand_Instagram">Instagram</label><br>
        <input id="brand_Lego" type="checkbox" name="brands[]" value="Lego" <?php echo set_checkbox('brands[]', 'Lego'); ?>><label for="brand_Lego">Lego</label><br>
        <input id="brand_Facebook" type="checkbox" name="brands[]" value="Facebook" <?php echo set_checkbox('brands[]', 'Facebook'); ?>><label for="brand_Facebook">Facebook</label><br>
        <input id="brand_Mars" type="checkbox" name="brands[]" value="Mars" <?php echo set_checkbox('brands[]', 'Mars'); ?>><label for="brand_Mars">Mars</label><br>
        <input id="brand_Tinder" type="checkbox" name="brands[]" value="Tinder" <?php echo set_checkbox('brands[]', 'Tinder'); ?>><label for="brand_Tinder">Tinder</label><br>
        <input id="brand_BMW" type="checkbox" name="brands[]" value="BMW" <?php echo set_checkbox('brands[]', 'BMW'); ?>><label for="brand_BMW">BMW</label><br>
        <input id="brand_CDA" type="checkbox" name="brands[]" value="CDA" <?php echo set_checkbox('brands[]', 'CDA'); ?>><label for="brand_CDA">CDA</label><br>
        <input id="brand_The Flinstones" type="checkbox" name="brands[]" value="The Flinstones" <?php echo set_checkbox('brands[]', 'The Flinstones'); ?>><label for="brand_The Flinstones">The Flinstones</label><br>
        <input id="brand_eBay" type="checkbox" name="brands[]" value="eBay" <?php echo set_checkbox('brands[]', 'eBay'); ?>><label for="brand_eBay">eBay</label><br>
        <input id="brand_Oracle" type="checkbox" name="brands[]" value="Oracle" <?php echo set_checkbox('brands[]', 'Oracle'); ?>><label for="brand_Oracle">Oracle</label><br>
        <input id="brand_Ford" type="checkbox" name="brands[]" value="Ford" <?php echo set_checkbox('brands[]', 'Ford'); ?>><label for="brand_Ford">Ford</label><br>
        <input id="brand_Panasonic" type="checkbox" name="brands[]" value="Panasonic" <?php echo set_checkbox('brands[]', 'Panasonic'); ?>><label for="brand_Panasonic">Panasonic</label><br>
        <input id="brand_Lord of the Rings" type="checkbox" name="brands[]" value="Lord of the Rings" <?php echo set_checkbox('brands[]', 'Lord of the Rings'); ?>><label for="brand_Lord of the Rings">Lord of the Rings</label><br>
        <input id="brand_Harry Potter" type="checkbox" name="brands[]" value="Harry Potter" <?php echo set_checkbox('brands[]', 'Harry Potter'); ?>><label for="brand_Harry Potter">Harry Potter</label><br>
        <input id="brand_Hema" type="checkbox" name="brands[]" value="Hema" <?php echo set_checkbox('brands[]', 'Hema'); ?>><label for="brand_Hema">Hema</label><br>
        <input id="brand_SBS6" type="checkbox" name="brands[]" value="SBS6" <?php echo set_checkbox('brands[]', 'SBS6'); ?>><label for="brand_SBS6">SBS6</label><br>
        <input id="brand_Ajax" type="checkbox" name="brands[]" value="Ajax" <?php echo set_checkbox('brands[]', 'Ajax'); ?>><label for="brand_Ajax">Ajax</label><br>
        <input id="brand_AH" type="checkbox" name="brands[]" value="AH" <?php echo set_checkbox('brands[]', 'AH'); ?>><label for="brand_AH">AH</label><br>
    </div>

    <h2>Persoonlijkheidstest</h2>

    <div>
        <label>Vraag 1</label>
        <div class="formulier">
            <input id="vraag1-1" type="radio" name="vraag1" value="-1"<?php echo set_checkbox('vraag1', '-1'); ?>><label for="vraag1-1">Ik geef de voorkeur aan grote groepen mensen, met een grote diversiteit.</label><br>
            <input id="vraag1-2" type="radio" name="vraag1" value="-2"<?php echo set_checkbox('vraag1', '-2'); ?>><label for="vraag1-2">Ik geef de voorkeur aan intieme bijeenkomsten met uitsluitend goede vrienden.</label><br>
            <input id="vraag1-3" type="radio" name="vraag1" value="-3"<?php echo set_checkbox('vraag1', '-3'); ?>><label for="vraag1-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 2</label>
        <div class="formulier">
            <input id="vraag2-1" type="radio" name="vraag2" value="-1"<?php echo set_checkbox('vraag2', '-1'); ?>><label for="vraag2-1">Ik doe eerst, en dan denk ik.</label><br>
            <input id="vraag2-2" type="radio" name="vraag2" value="-2"<?php echo set_checkbox('vraag2', '-2'); ?>><label for="vraag2-2">Ik denk eerst, en dan doe ik.</label><br>
            <input id="vraag2-3" type="radio" name="vraag2" value="-3"<?php echo set_checkbox('vraag2', '-3'); ?>><label for="vraag2-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 3</label>
        <div class="formulier">
            <input id="vraag3-1" type="radio" name="vraag3" value="-1"<?php echo set_checkbox('vraag3', '-1'); ?>><label for="vraag3-1">Ik ben makkelijk afgeleid, met minder aandacht voor een enkele specifieke taak.</label><br>
            <input id="vraag3-2" type="radio" name="vraag3" value="-2"<?php echo set_checkbox('vraag3', '-2'); ?>><label for="vraag3-2">Ik kan me goed focussen, met minder aandacht voor het grote geheel.</label><br>
            <input id="vraag3-3" type="radio" name="vraag3" value="-3"<?php echo set_checkbox('vraag3', '-3'); ?>><label for="vraag3-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 4</label>
        <div class="formulier">
            <input id="vraag4-1" type="radio" name="vraag4" value="-1"<?php echo set_checkbox('vraag4', '-1'); ?>><label for="vraag4-1">Ik ben een makkelijke prater en ga graag uit.</label><br>
            <input id="vraag4-2" type="radio" name="vraag4" value="-2"<?php echo set_checkbox('vraag4', '-2'); ?>><label for="vraag4-2">Ik ben een goede luisteraar en meer een privé-persoon.</label><br>
            <input id="vraag4-3" type="radio" name="vraag4" value="-3"<?php echo set_checkbox('vraag4', '-3'); ?>><label for="vraag4-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 5</label>
        <div class="formulier">
            <input id="vraag5-1" type="radio" name="vraag5" value="-1"<?php echo set_checkbox('vraag5', '-1'); ?>><label for="vraag5-1">Als gastheer/-vrouw ben ik altijd het centrum van de belangstelling.</label><br>
            <input id="vraag5-2" type="radio" name="vraag5" value="-2"<?php echo set_checkbox('vraag5', '-2'); ?>><label for="vraag5-2">Als gastheer/-vrouw ben altijd achter de schermen bezig om te zorgen dat alles soepeltjes verloopt.</label><br>
            <input id="vraag5-3" type="radio" name="vraag5" value="-3"<?php echo set_checkbox('vraag5', '-3'); ?>><label for="vraag5-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 6</label>
        <div class="formulier">
            <input id="vraag6-1" type="radio" name="vraag6" value="-1"<?php echo set_checkbox('vraag6', '-1'); ?>><label for="vraag6-1">Ik geef de voorkeur aan concepten en het leren op basis van associaties.</label><br>
            <input id="vraag6-2" type="radio" name="vraag6" value="-2"<?php echo set_checkbox('vraag6', '-2'); ?>><label for="vraag6-2">Ik geef de voorkeur aan observaties en het leren op basis van feiten.</label><br>
            <input id="vraag6-3" type="radio" name="vraag6" value="-3"<?php echo set_checkbox('vraag6', '-3'); ?>><label for="vraag6-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 7</label>
        <div class="formulier">
            <input id="vraag7-1" type="radio"  name="vraag7" value="-1"<?php echo set_checkbox('vraag7', '-1'); ?>><label><label for="vraag7-1">Ik heb een groot inbeeldingsvermogen en heb een globaal overzicht van een project.</label><br>
                <input id="vraag7-2" type="radio"  name="vraag7" value="-2"<?php echo set_checkbox('vraag7', '-2'); ?>><label><label for="vraag7-2">Ik ben pragmatisch ingesteld en heb een gedetailleerd beeld van elke stap.</label><br>
                    <input id="vraag7-3" type="radio"  name="vraag7" value="-3"<?php echo set_checkbox('vraag7', '-3'); ?>><label><label for="vraag7-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 8</label>
        <div class="formulier">
            <input id="vraag8-1" type="radio" name="vraag8" value="-1"<?php echo set_checkbox('vraag8', '-1'); ?>><label for="vraag8-1">Ik kijk naar de toekomst.</label><br>
            <input id="vraag8-2" type="radio" name="vraag8" value="-2"<?php echo set_checkbox('vraag8', '-2'); ?>><label for="vraag8-2">Ik houd mijn blik op het heden gericht.</label><br>
            <input id="vraag8-3" type="radio" name="vraag8" value="-3"<?php echo set_checkbox('vraag8', '-3'); ?>><label for="vraag8-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 9</label>
        <div class="formulier">
            <input id="vraag9-1" type="radio" name="vraag9" value="-1"<?php echo set_checkbox('vraag9', '-1'); ?>><label for="vraag9-1">Ik houd van de veranderlijkheid in relaties en taken.</label><br>
            <input id="vraag9-2" type="radio" name="vraag9" value="-2"<?php echo set_checkbox('vraag9', '-2'); ?>><label for="vraag9-2">Ik houd van de voorspelbaarheid in relaties en taken.</label><br>
            <input id="vraag9-3" type="radio" name="vraag9" value="-3"<?php echo set_checkbox('vraag9', '-3'); ?>><label for="vraag9-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 10</label>
        <div class="formulier">
            <input id="vraag10-1" type="radio" name="vraag10" value="-1"<?php echo set_checkbox('vraag10', '-1'); ?>><label for="vraag10-1">Ik overdenk een beslissing helemaal.</label><br>
            <input id="vraag10-2" type="radio" name="vraag10" value="-2"<?php echo set_checkbox('vraag10', '-2'); ?>><label for="vraag10-2">Ik beslis met mijn gevoel.</label><br>
            <input id="vraag10-3" type="radio" name="vraag10" value="-3"<?php echo set_checkbox('vraag10', '-3'); ?>><label for="vraag10-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 11</label>
        <div class="formulier">
            <input id="vraag11-1" type="radio" name="vraag11" value="-1"<?php echo set_checkbox('vraag11', '-1'); ?>><label for="vraag11-1">Ik werk het beste met een lijst plussen en minnen.</label><br>
            <input id="vraag11-2" type="radio" name="vraag11" value="-2"<?php echo set_checkbox('vraag11', '-2'); ?>><label for="vraag11-2">Ik beslis op basis van de gevolgen voor mensen.</label><br>
            <input id="vraag11-3" type="radio" name="vraag11" value="-3"<?php echo set_checkbox('vraag11', '-3'); ?>><label for="vraag11-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 12</label>
        <div class="formulier">
            <input id="vraag12-1" type="radio" name="vraag12" value="-1"<?php echo set_checkbox('vraag12', '-1'); ?>><label for="vraag12-1">Ik ben van nature kritisch.</label><br>
            <input id="vraag12-2" type="radio" name="vraag12" value="-2"<?php echo set_checkbox('vraag12', '-2'); ?>><label for="vraag12-2">Ik maak het mensen graag naar de zin.</label><br>
            <input id="vraag12-3" type="radio" name="vraag12" value="-3"<?php echo set_checkbox('vraag12', '-3'); ?>><label for="vraag12-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 13</label>
        <div class="formulier">
            <input id="vraag13-1" type="radio" name="vraag13" value="-1"<?php echo set_checkbox('vraag13', '-1'); ?>><label for="vraag13-1">Ik ben eerder eerlijk dan tactisch.</label><br>
            <input id="vraag13-2" type="radio" name="vraag13" value="-2"<?php echo set_checkbox('vraag13', '-2'); ?>><label for="vraag13-2">Ik ben eerder tactisch dan eerlijk.</label><br>
            <input id="vraag13-3" type="radio" name="vraag13" value="-3"<?php echo set_checkbox('vraag13', '-3'); ?>><label for="vraag13-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 14</label>
        <div class="formulier">
            <input id="vraag14-1" type="radio" name="vraag14" value="-1"<?php echo set_checkbox('vraag14', '-1'); ?>><label for="vraag14-1">Ik houd van vertrouwde situaties.</label><br>
            <input id="vraag14-2" type="radio" name="vraag14" value="-2"<?php echo set_checkbox('vraag14', '-2'); ?>><label for="vraag14-2">Ik houd van flexibele situaties.</label><br>
            <input id="vraag14-3" type="radio" name="vraag14" value="-3"<?php echo set_checkbox('vraag14', '-3'); ?>><label for="vraag14-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 15</label>
        <div class="formulier">
            <input id="vraag15-1" type="radio" name="vraag15" value="-1"<?php echo set_checkbox('vraag15', '-1'); ?>><label for="vraag15-1">Ik plan alles, met een to-do lijstje in mijn hand.</label><br>
            <input id="vraag15-2" type="radio" name="vraag15" value="-2"<?php echo set_checkbox('vraag15', '-2'); ?>><label for="vraag15-2">Ik wacht tot er meerdere ideeën opborrelen en kies dan on-the-fly wat te doen.</label><br>
            <input id="vraag15-3" type="radio" name="vraag15" value="-3"<?php echo set_checkbox('vraag15', '-3'); ?>><label for="vraag15-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 16</label>
        <div class="formulier">
            <input id="vraag16-1" type="radio" name="vraag16" value="-1"<?php echo set_checkbox('vraag16', '-1'); ?>><label for="vraag16-1">Ik houd van het afronden van projecten.</label><br>
            <input id="vraag16-2" type="radio" name="vraag16" value="-2"<?php echo set_checkbox('vraag16', '-2'); ?>><label for="vraag16-2">Ik houd van het opstarten van projecten.</label><br>
            <input id="vraag16-3" type="radio" name="vraag16" value="-3"<?php echo set_checkbox('vraag16', '-3'); ?>><label for="vraag16-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 17</label>
        <div class="formulier">
            <input id="vraag17-1" type="radio" name="vraag17" value="-1"<?php echo set_checkbox('vraag17', '-1'); ?>><label for="vraag17-1">Ik ervaar stress door een gebrek aan planning en abrupte wijzigingen.</label><br>
            <input id="vraag17-2" type="radio" name="vraag17" value="-2"<?php echo set_checkbox('vraag17', '-2'); ?>><label for="vraag17-2">Ik ervaar gedetailleerde plannen als benauwend en kijk uit naar veranderingen.</label><br>
            <input id="vraag17-3" type="radio" name="vraag17" value="-3"<?php echo set_checkbox('vraag17', '-3'); ?>><label for="vraag17-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 18</label>
        <div class="formulier">
            <input id="vraag18-1" type="radio" name="vraag18" value="-1"<?php echo set_checkbox('vraag18', '-1'); ?>><label for="vraag18-1">Het is waarschijnlijker dat ik een doel bereik.</label><br>
            <input id="vraag18-2" type="radio" name="vraag18" value="-2"<?php echo set_checkbox('vraag18', '-2'); ?>><label for="vraag18-2">Het is waarschijnlijker dat ik een kans zie.</label><br>
            <input id="vraag18-3" type="radio" name="vraag18" value="-3"<?php echo set_checkbox('vraag18', '-3'); ?>><label for="vraag18-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>
    <div>
        <label>Vraag 19</label>
        <div class="formulier">
            <input id="vraag19-1" type="radio" name="vraag19" value="-1"<?php echo set_checkbox('vraag19', '-1'); ?>><label for="vraag19-1">"All play and no work maakt dat het project niet afkomt."</label><br>
            <input id="vraag19-2" type="radio" name="vraag19" value="-2"<?php echo set_checkbox('vraag19', '-2'); ?>><label for="vraag19-2">"All work and no play maakt je maar een saaie pief."</label><br>
            <input id="vraag19-3" type="radio" name="vraag19" value="-3"<?php echo set_checkbox('vraag19', '-3'); ?>><label for="vraag19-3">Ik zit er eigenlijk tussenin.</label>
        </div>
    </div>

    <input type="submit" value="Registreer">

</div>
</form>
