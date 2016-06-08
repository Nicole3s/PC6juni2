
<?php echo validation_errors(); ?>

<?php echo form_open('mijnprofiel/inlog'); ?>

<h5>Nickname</h5>
<input type="text" name="nickname" value="<?php echo set_value('nickname'); ?>" size="50" />

<h5>Wachtwoord</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<div><input type="submit" value="Login" /></div>

</form>

