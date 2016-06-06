<?php echo validation_errors(); ?>

<?php echo form_open('registreer/registreer'); ?>
<div id="promotie">
    <h2>Registratie</h2>

    <h5>Persoonsgegevens</h5>

    <p>
        <label for="nickname">Nickname</label>
        <input type="text" name="nickname" value="<?php echo set_value('nickname'); ?>" size="50" />
    </p>

    <p>
        <label for="voornaam">Voornaam</label>
        <input type="text" name="voornaam" value="">
        <label for="tussenvoegsel">Tussenvoegsel</label>
        <input type="text" name="tussenvoegsel" value="">
        <label for="achternaam">Achternaam</label>
        <input type="text" name="achternaam" value="">
    </p>

    <p>
        <label for="password">Wachtwoord</label>
        <input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
    </p>

    <p>
        <label for="passconf">Wachtwoord Bevestiging</label>
        <input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
    </p>

    <p>
        <label for="email">Email Adres</label>
        <input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
    </p>

    <p>
        <label for="geslacht">Geslacht</label>
        <select id="geslacht" name="geslacht">
            <option value="vrouw">Vrouw</option>
            <option value="man">Man</option>
        </select>
    </p>

    <p>
        <label for="geboortedatum">Geboortedatum (JJJJ-MM-DD)</label>
        <input type="date" name="geboortedatum" value="<?php echo set_value('geboortedatum'); ?>" size="50"><br>
    </p>

    <p>
    <h5>Beschrijving</h5>
    <textarea id="beschrijving" name="beschrijving" value="<?php echo set_value('beschrijving'); ?>" size="50"></textarea>
    </p>

    <p>
        <label for="geslachtsvoorkeur">Geslachtsvoorkeur</label>
        <select id="geslachtsvoorkeur" name="geslachtsvoorkeur">
            <option value="vrouw">Vrouw</option>
            <option value="man">Man</option>
            <option value="beide">Beide</option>
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

    <label>Ik heb een voorkeur voor deze merken</label>
    <div class="form_list">
        <input id="brand_CocaCola" type="checkbox" name="brands[]" value="<?php echo set_value('CocaCola');?>"><label for="brand_CocaCola">CocaCola</label><br>
        <input id="brand_Pepsi" type="checkbox" name="brands[]" value="Pepsi"><label for="brand_Pepsi">Pepsi</label><br>
        <input id="brand_Google" type="checkbox" name="brands[]" value="Google"><label for="brand_Google">Google</label><br>
        <input id="brand_Disney" type="checkbox" name="brands[]" value="Disney"><label for="brand_Disney">Disney</label><br>
        <input id="brand_Sony" type="checkbox" name="brands[]" value="Sony"><label for="brand_Sony">Sony</label><br>
        <input id="brand_Dell" type="checkbox" name="brands[]" value="Dell"><label for="brand_Dell">Dell</label><br>
        <input id="brand_Bing" type="checkbox" name="brands[]" value="Bing"><label for="brand_Bing">Bing</label><br>
        <input id="brand_Canon" type="checkbox" name="brands[]" value="Canon"><label for="brand_Canon">Canon</label><br>
        <input id="brand_Nikon'" type="checkbox" name="brands[]" value="Nikon'"><label for="brand_Nikon">Nikon</label><br>
        <input id="brand_Toshiba" type="checkbox" name="brands[]" value="Toshiba"><label for="brand_Toshiba">Toshiba</label><br>
        <input id="brand_HBO" type="checkbox" name="brands[]" value="HBO"><label for="brand_HBO">HBO</label><br>
        <input id="brand_H&M" type="checkbox" name="brands[]" value="H&M"><label for="brand_H&M">H&amp;M</label><br>
        <input id="brand_Puma" type="checkbox" name="brands[]" value="Puma"><label for="brand_Puma">Puma</label><br>
        <input id="brand_Nike" type="checkbox" name="brands[]" value="Nike"><label for="brand_Nike">Nike</label><br>
        <input id="brand_Shell" type="checkbox" name="brands[]" value="Shell"><label for="brand_Shell">Shell</label><br>
        <input id="brand_VW" type="checkbox" name="brands[]" value="VW"><label for="brand_VW">VW</label><br>
        <input id="brand_McDonalds" type="checkbox" name="brands[]" value="McDonalds"><label for="McDonalds">McDonalds</label><br>
        <input id="brand_Burger King" type="checkbox" name="brands[]" value="Burger King"><label for="brand_Burger King">Burger King</label><br>
        <input id="brand_Calvin Klein" type="checkbox" name="brands[]" value="Calvin Klein"><label for="brand_Calvin Klein">Calvin Klein</label><br>
        <input id="brand_Audi" type="checkbox" name="brands[]" value="Audi"><label for="brand_Audi">Audi</label><br>
        <input id="brand_Spotify" type="checkbox" name="brands[]" value="Spotify"><label for="brand_Spotify">Spotify</label><br>
        <input id="brand_Twitter" type="checkbox" name="brands[]" value="Twitter"><label for="brand_Twitter">Twitter</label><br>
        <input id="brand_Instagram" type="checkbox" name="brands[]" value="Instagram"><label for="brand_Instagram">Instagram</label><br>
        <input id="brand_Lego" type="checkbox" name="brands[]" value="Lego"><label for="brand_Lego">Lego</label><br>
        <input id="brand_Facebook" type="checkbox" name="brands[]" value="Facebook"><label for="brand_Facebook">Facebook</label><br>
        <input id="brand_Mars" type="checkbox" name="brands[]" value="Mars"><label for="brand_Mars">Mars</label><br>
        <input id="brand_Tinder" type="checkbox" name="brands[]" value="Tinder"><label for="brand_Tinder">Tinder</label><br>
        <input id="brand_BMW" type="checkbox" name="brands[]" value="BMW"><label for="brand_BMW">BMW</label><br>
        <input id="brand_CDA" type="checkbox" name="brands[]" value="CDA"><label for="brand_CDA">CDA</label><br>
        <input id="brand_The Flinstones" type="checkbox" name="brands[]" value="The Flinstones"><label for="brand_The Flinstones">The Flinstones</label><br>
        <input id="brand_eBay" type="checkbox" name="brands[]" value="eBay"><label for="brand_eBay">eBay</label><br>
        <input id="brand_Oracle" type="checkbox" name="brands[]" value="Oracle"><label for="brand_Oracle">Oracle</label><br>
        <input id="brand_Ford" type="checkbox" name="brands[]" value="Ford"><label for="brand_Ford">Ford</label><br>
        <input id="brand_Panasonic" type="checkbox" name="brands[]" value="Panasonic"><label for="brand_Panasonic">Panasonic</label><br>
        <input id="brand_Lord of the Rings" type="checkbox" name="brands[]" value="Lord of the Rings"><label for="brand_Lord of the Rings">Lord of the Rings</label><br>
        <input id="brand_Harry Potter" type="checkbox" name="brands[]" value="Harry Potter"><label for="brand_Harry Potter">Harry Potter</label><br>
        <input id="brand_Hema" type="checkbox" name="brands[]" value="Hema"><label for="brand_Hema">Hema</label><br>
        <input id="brand_SBS6" type="checkbox" name="brands[]" value="SBS6"><label for="brand_SBS6">SBS6</label><br>
        <input id="brand_Ajax" type="checkbox" name="brands[]" value="Ajax"><label for="brand_Ajax">Ajax</label><br>
        <input id="brand_AH" type="checkbox" name="brands[]" value="AH"><label for="brand_AH">AH</label><br>
    </div>

    <div><input type="submit" value="Naar de test!" /></div>
</div>
</form>
