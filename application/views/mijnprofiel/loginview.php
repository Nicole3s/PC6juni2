<h1>Simple Login with CodeIgniter</h1>
<?php echo validation_errors(); ?>
<?php echo form_open('verifylogin'); ?>
<label for="email">Email:</label>
<input type="text" size="20" id="email" name="email"/>
<br/>
<label for="wachtwoord">Wachtwoord:</label>
<input type="wachtwoord" size="20" id="wachtwoord" name="wachtwoord"/>
<br/>
<input type="submit" value="Log In"/>
</form>