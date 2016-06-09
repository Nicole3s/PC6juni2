<?php echo validation_errors(); ?>

<?php echo form_open('registreer/registreer');
$this->load->helper('form');?>
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
        <input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />
    </p>

    <p>
        <label for="passconf">Wachtwoord Bevestiging</label>
        <input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
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

    <div><input type="submit" value="Naar de test!" /></div>
</div>
</form>
