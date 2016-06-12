

<p>
    <label for="geslachtsvoorkeur">Geslachtsvoorkeur</label>

    <select name="geslacht">
<!--        <option value="0">kies</option>-->
        <option value="man">Man</option>
        <option value="vrouw">Vrouw</option>
<!--        <option value=value="man|vrouw"}>Beide</option>-->
<!--        --><?php //$geslacht = $this->input->post('geslacht')?>
    </select>


<p>
    <label for="minleeftijd">Minimum leeftijd</label>
    <select name="minimaal">
        <?php for ($i = 18; $i <= 100 ; $i++) : ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
</p>
<?php //$minleeftijd = $this->input->post('minimaal'); ?>

<p>
    <label for="minleeftijd">Maximum leeftijd</label>
    <select name="maximaal">
        <?php for ($i = 18; $i <= 100 ; $i++) : ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
 </p>
<?php //$maxleeftijd = $this->input->post('maximaal'); ?>

<p>
    <label for="persoonlijkheid">Persoonlijkheid</label>
    <select name="ie">
        <option value="I">I</option>
        <option value="E">E</option>
    </select>
    <select name="ns">
        <option value="N">N</option>
        <option value="S">S</option>
    </select>
    <select name="tf">
        <option value="T">T</option>
        <option value="F">F</option>
    </select>
    <select name="jp">
        <option value="J">J</option>
        <option value="P">P</option>
    </select>

</p>

<?php //$IE = $this->input->post('ie'); ?>
<?php //$NS = $this->input->post('ns'); ?>
<?php //$TF = $this->input->post('tf'); ?>
<?php //$JP = $this->input->post('jp'); ?>
<p>
    <label for="merkvoorkeur">Merkvoorkeur</label>

</p>


<?php  echo anchor('zoek/gezocht', "ZOEK")?>



</p>


    

