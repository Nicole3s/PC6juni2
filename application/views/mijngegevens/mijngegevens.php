<?php
$id = $this->db
    ->select('id')
    ->from('Persoon')
    ->where('nickname', $_SESSION['nickname'])
    ->get()->row_array()['id'];
$query = $this->db->select('leeftijdsvoorkeurmax,leeftijdsvoorkeurmin,naam, wachtwoord, geslacht, geslachtsvoorkeur, beschrijving, email, geboortedatum, geslacht, beschrijving, tI,tN, tT, tJ')->from('Persoon')
    ->group_start()
    ->where('id', $id )
    ->group_end()
    ->get();
$query2 = $this->db->select('merk')->from('Merkvoorkeur')
    ->group_start()
    ->where('id', $id )
    ->group_end()
    ->get();
foreach ($query->result() as $row) {
    $naam = $row->naam;
    $wachtwoord = $row->wachtwoord;
    $geslacht = $row->geslacht;
    $geslachtsvoorkeur = $row->geslachtsvoorkeur;
    $beschrijving = $row->beschrijving;
    $email = $row->email;
    $geboortedatum = $row->geboortedatum;
    $geslacht = $row->geslacht;
    $beschrijving = $row->beschrijving;
    $leeftijdsvoorkeurmin = $row->leeftijdsvoorkeurmin;
    $leeftijdsvoorkeurmax = $row->leeftijdsvoorkeurmax;
}

echo validation_errors();

echo form_open('mijngegevens/mijngegevens');
$this->load->helper('form');?>
<div id="registreer">
    <div id="promotie">
        <h2>Profiel wijzigen</h2>

        <h5>Persoonsgegevens</h5>

        <p>
            <label for="nickname">Nickname</label>
            <input type="text" name="nickname" value="<?php echo set_value('nickname',$_SESSION['nickname']); ?>" size="50" />
        </p>

        <p>
            <label for="naam">Naam</label>
            <input type="text" name="naam" value="<?php echo set_value('naam',$naam); ?>" size="50" >
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
            <input type="text" name="email" value="<?php echo set_value('email',$email); ?>" size="50" />
        </p>

        <p>
            <label for="geslacht">Geslacht</label>
            <select id="geslacht" name="geslacht">
                <?php if($geslacht=='man') : ?>
                <option value="man" <?php echo  set_select('geslacht', 'man', TRUE); ?>>Man</option><option value="vrouw" <?php echo  set_select('geslacht', 'vrouw'); ?>>Vrouw</option>
                <?php else : ?>
                <option value="man" <?php echo  set_select('geslacht', 'man'); ?>>Man</option><option value="vrouw" <?php echo  set_select('geslacht', 'vrouw', TRUE); ?>>Vrouw</option>
                <?php endif; ?>
            </select>
        </p>

        <p>
            <label for="geboortedatum">Geboortedatum (JJJJ-MM-DD)</label>
            <input type="date" name="geboortedatum" value="<?php echo set_value('geboortedatum', $geboortedatum); ?>" size="50"><br>
        </p>

        <p>
        <h5>Beschrijving</h5>
        <textarea id="beschrijving" name="beschrijving" rows="4" cols="50"> <?php echo set_value('beschrijving', $beschrijving); ?></textarea>
        </p>

        <p>
            <label for="geslachtsvoorkeur">Geslachtsvoorkeur</label>
            <select id="geslachtsvoorkeur" name="geslachtsvoorkeur">
                <?php if($geslacht=='man') : ?>
                    <option value="man" <?php echo  set_select('geslachtsvoorkeur', 'man', TRUE); ?>>Man</option>
                    <option value="vrouw" <?php echo  set_select('geslachtsvoorkeur', 'vrouw'); ?>>Vrouw</option>
                    <option value="beide" <?php echo  set_select('geslachtsvoorkeur', 'beide'); ?>>Beide</option>
                <?php elseif($geslacht=='vrouw') : ?>
                    <option value="man" <?php echo  set_select('geslachtsvoorkeur', 'man'); ?>>Man</option>
                    <option value="vrouw" <?php echo  set_select('geslachtsvoorkeur', 'vrouw', TRUE); ?>>Vrouw</option>
                    <option value="beide" <?php echo  set_select('geslachtsvoorkeur', 'beide'); ?>>Beide</option>
                    <option value="man" <?php echo  set_select('geslacht', 'man', TRUE); ?>>Man</option><option value="vrouw" <?php echo  set_select('geslacht', 'vrouw'); ?>>Vrouw</option>
                <?php else : ?>
                    <option value="man" <?php echo  set_select('geslachtsvoorkeur', 'man'); ?>>Man</option>
                    <option value="vrouw" <?php echo  set_select('geslachtsvoorkeur', 'vrouw'); ?>>Vrouw</option>
                    <option value="beide" <?php echo  set_select('geslachtsvoorkeur', 'beide', TRUE); ?>>Beide</option>
                <?php endif; ?>
            </select>
        </p>

        <h5>Leeftijdsvoorkeuren:</h5>

        <p>
            <label for="minleeftijd">Minimum leeftijd</label>
            <input id="minleeftijd" type="number" name="minleeftijd" value="<?php echo set_value('minleeftijd',$leeftijdsvoorkeurmin); ?>" size="50" min="18" step="1">
        </p>

        <p>
            <label for="maxleeftijd">Maximum leeftijd</label>
            <input id="maxleeftijd" type="number" name="maxleeftijd" value="<?php echo set_value('maxleeftijd',$leeftijdsvoorkeurmax); ?>" size="50" min="18" step="1">
        </p>
    </div>
    <label>Ik heb een voorkeur voor deze merken</label>
    <?php
    $id = $this->db
        ->select('id')
        ->from('Persoon')
        ->where('nickname', $_SESSION['nickname'])
        ->get()->row_array()['id'];
    $arraymerk = $this->db
        ->select('merk')
        ->from('Merkvoorkeur')
        ->where('id', $id)
        ->get()->row_array()['merk'];

    $merkstring="";
    foreach ($query2->result() as $row2)
    {
        $merkstring =  $merkstring.'_'.$row2->merk;
    }
    $merkarray = explode("_", $merkstring);





    ?>
    <div id="check_list">
        <?php if(in_array("CocaCola",$merkarray)) : ?>
        <input id="brand_CocaCola" type="checkbox" name="brands[]" value="CocaCola" <?php echo set_checkbox('brands[]', 'CocaCola',TRUE); ?>></label for="brand_CocaCola">CocaCola</label><br>
        <?php else : ?>
            <input id="brand_CocaCola" type="checkbox" name="brands[]" value="CocaCola" <?php echo set_checkbox('brands[]', 'CocaCola'); ?>></label for="brand_CocaCola">CocaCola</label><br>
        <?php endif; ?>
        <?php if(in_array("Pepsi",$merkarray)) : ?>
            <input id="brand_Pepsi" type="checkbox" name="brands[]" value="Pepsi" <?php echo set_checkbox('brands[]', 'Pepsi',TRUE); ?>><label for="brand_Pepsi">Pepsi</label><br>
        <?php else : ?>
            <input id="brand_Pepsi" type="checkbox" name="brands[]" value="Pepsi" <?php echo set_checkbox('brands[]', 'Pepsi'); ?>><label for="brand_Pepsi">Pepsi</label><br>
        <?php endif; ?>
        <input id="brand_Google" type="checkbox" name="brands[]" value="Google" <?php echo set_checkbox('brands[]', 'Google', in_array("Google",$merkarray)); ?>><label for="brand_Google">Google</label><br>
        <input id="brand_Disney" type="checkbox" name="brands[]" value="Disney" <?php echo set_checkbox('brands[]', 'Disney', in_array("Disney",$merkarray)); ?>><label for="brand_Disney">Disney</label><br>
        <input id="brand_Sony" type="checkbox" name="brands[]" value="Sony" <?php echo set_checkbox('brands[]', 'Sony', in_array("Pepsi",$merkarray)); ?>><label for="brand_Sony">Sony</label><br>
        <input id="brand_Dell" type="checkbox" name="brands[]" value="Dell" <?php echo set_checkbox('brands[]', 'Dell', in_array("Dell",$merkarray)); ?>><label for="brand_Dell">Dell</label><br>
        <input id="brand_Bing" type="checkbox" name="brands[]" value="Bing" <?php echo set_checkbox('brands[]', 'Bing', in_array("Bing",$merkarray)); ?>><label for="brand_Bing">Bing</label><br>
        <input id="brand_Canon" type="checkbox" name="brands[]" value="Canon" <?php echo set_checkbox('brands[]', 'Canon', in_array("Canon",$merkarray)); ?>><label for="brand_Canon">Canon</label><br>
        <input id="brand_Nikon'" type="checkbox" name="brands[]" value="Nikon" <?php echo set_checkbox('brands[]', 'Nikon', in_array("Nikon",$merkarray)); ?>><label for="brand_Nikon">Nikon</label><br>
        <input id="brand_Toshiba" type="checkbox" name="brands[]" value="Toshiba" <?php echo set_checkbox('brands[]', 'Toshiba', in_array("Toshiba",$merkarray)); ?>><label for="brand_Toshiba">Toshiba</label><br>
        <input id="brand_HBO" type="checkbox" name="brands[]" value="HBO" <?php echo set_checkbox('brands[]', 'HBO', in_array("HBO",$merkarray)); ?>><label for="brand_HBO">HBO</label><br>
        <input id="brand_H&M" type="checkbox" name="brands[]" value="H&M" <?php echo set_checkbox('brands[]', 'H&M', in_array("H&M",$merkarray)); ?>><label for="brand_H&M">H&amp;M</label><br>
        <input id="brand_Puma" type="checkbox" name="brands[]" value="Puma" <?php echo set_checkbox('brands[]', 'Puma', in_array("Puma",$merkarray)); ?>><label for="brand_Puma">Puma</label><br>
        <input id="brand_Nike" type="checkbox" name="brands[]" value="Nike" <?php echo set_checkbox('brands[]', 'Nike', in_array("Nike",$merkarray)); ?>><label for="brand_Nike">Nike</label><br>
        <input id="brand_Shell" type="checkbox" name="brands[]" value="Shell" <?php echo set_checkbox('brands[]', 'Shell', in_array("Shell",$merkarray)); ?>><label for="brand_Shell">Shell</label><br>
        <input id="brand_VW" type="checkbox" name="brands[]" value="VW" <?php echo set_checkbox('brands[]', 'VW', in_array("VW",$merkarray)); ?>><label for="brand_VW">VW</label><br>
        <input id="brand_McDonalds" type="checkbox" name="brands[]" value="McDonalds" <?php echo set_checkbox('brands[]', 'McDonalds', in_array("McDonalds",$merkarray)); ?>><label for="McDonalds">McDonalds</label><br>
        <input id="brand_Burger King" type="checkbox" name="brands[]" value="Burger King" <?php echo set_checkbox('brands[]', 'Burger King', in_array("Burger King",$merkarray)); ?>><label for="brand_Burger King">Burger King</label><br>
        <input id="brand_Calvin Klein" type="checkbox" name="brands[]" value="Calvin Klein" <?php echo set_checkbox('brands[]', 'Calvin Klein', in_array("Calvin Klein",$merkarray)); ?>><label for="brand_Calvin Klein">Calvin Klein</label><br>
        <input id="brand_Audi" type="checkbox" name="brands[]" value="Audi" <?php echo set_checkbox('brands[]', 'Audi', in_array("Audi",$merkarray)); ?>><label for="brand_Audi">Audi</label><br>
        <input id="brand_Spotify" type="checkbox" name="brands[]" value="Spotify" <?php echo set_checkbox('brands[]', 'Spotify', in_array("Spotify",$merkarray)); ?>><label for="brand_Spotify">Spotify</label><br>
        <input id="brand_Twitter" type="checkbox" name="brands[]" value="Twitter" <?php echo set_checkbox('brands[]', 'Twitter', in_array("Twitter",$merkarray)); ?>><label for="brand_Twitter">Twitter</label><br>
        <input id="brand_Instagram" type="checkbox" name="brands[]" value="Instagram" <?php echo set_checkbox('brands[]', 'Instagram', in_array("Instagram",$merkarray)); ?>><label for="brand_Instagram">Instagram</label><br>
        <input id="brand_Lego" type="checkbox" name="brands[]" value="Lego" <?php echo set_checkbox('brands[]', 'Lego', in_array("Lego",$merkarray)); ?>><label for="brand_Lego">Lego</label><br>
        <input id="brand_Facebook" type="checkbox" name="brands[]" value="Facebook" <?php echo set_checkbox('brands[]', 'Facebook', in_array("Facebook",$merkarray)); ?>><label for="brand_Facebook">Facebook</label><br>
        <input id="brand_Mars" type="checkbox" name="brands[]" value="Mars" <?php echo set_checkbox('brands[]', 'Mars', in_array("Mars",$merkarray)); ?>><label for="brand_Mars">Mars</label><br>
        <input id="brand_Tinder" type="checkbox" name="brands[]" value="Tinder" <?php echo set_checkbox('brands[]', 'Tinder', in_array("Tinder",$merkarray)); ?>><label for="brand_Tinder">Tinder</label><br>
        <input id="brand_BMW" type="checkbox" name="brands[]" value="BMW" <?php echo set_checkbox('brands[]', 'BMW', in_array("BMW",$merkarray)); ?>><label for="brand_BMW">BMW</label><br>
        <input id="brand_CDA" type="checkbox" name="brands[]" value="CDA" <?php echo set_checkbox('brands[]', 'CDA', in_array("CDA",$merkarray)); ?>><label for="brand_CDA">CDA</label><br>
        <input id="brand_The Flinstones" type="checkbox" name="brands[]" value="The Flinstones" <?php echo set_checkbox('brands[]', 'The Flinstones', in_array("The Flinstones",$merkarray)); ?>><label for="brand_The Flinstones">The Flinstones</label><br>
        <input id="brand_eBay" type="checkbox" name="brands[]" value="eBay" <?php echo set_checkbox('brands[]', 'eBay', in_array("eBay",$merkarray)); ?>><label for="brand_eBay">eBay</label><br>
        <input id="brand_Oracle" type="checkbox" name="brands[]" value="Oracle" <?php echo set_checkbox('brands[]', 'Oracle', in_array("Oracle",$merkarray)); ?>><label for="brand_Oracle">Oracle</label><br>
        <input id="brand_Ford" type="checkbox" name="brands[]" value="Ford" <?php echo set_checkbox('brands[]', 'Ford', in_array("Ford",$merkarray)); ?>><label for="brand_Ford">Ford</label><br>
        <input id="brand_Panasonic" type="checkbox" name="brands[]" value="Panasonic" <?php echo set_checkbox('brands[]', 'Panasonic', in_array("Panasonic",$merkarray)); ?>><label for="brand_Panasonic">Panasonic</label><br>
        <input id="brand_Lord of the Rings" type="checkbox" name="brands[]" value="Lord of the Rings" <?php echo set_checkbox('brands[]', 'Lord of the Rings', in_array("Lord of the Rings",$merkarray)); ?>><label for="brand_Lord of the Rings">Lord of the Rings</label><br>
        <input id="brand_Harry Potter" type="checkbox" name="brands[]" value="Harry Potter" <?php echo set_checkbox('brands[]', 'Harry Potter', in_array("Harry Potter",$merkarray)); ?>><label for="brand_Harry Potter">Harry Potter</label><br>
        <input id="brand_Hema" type="checkbox" name="brands[]" value="Hema" <?php echo set_checkbox('brands[]', 'Hema', in_array("Hema",$merkarray)); ?>><label for="brand_Hema">Hema</label><br>
        <input id="brand_SBS6" type="checkbox" name="brands[]" value="SBS6" <?php echo set_checkbox('brands[]', 'SBS6', in_array("SBS6",$merkarray)); ?>><label for="brand_SBS6">SBS6</label><br>
        <input id="brand_Ajax" type="checkbox" name="brands[]" value="Ajax" <?php echo set_checkbox('brands[]', 'Ajax', in_array("Ajax",$merkarray)); ?>><label for="brand_Ajax">Ajax</label><br>
        <input id="brand_AH" type="checkbox" name="brands[]" value="AH" <?php echo set_checkbox('brands[]', 'AH', in_array("AH",$merkarray)); ?>><label for="brand_AH">AH</label><br>
        <input type="submit" value="Wijzigingen opslaan">
    </div>
</div>
</form>
