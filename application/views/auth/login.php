<?php if(!empty($auth_message)): ?>
  <div class="alert alert-danger">
    <?php echo $auth_message; ?>
  </div>
<?php endif; ?>

<?php echo form_open("auth/login", 'role="form"');?>
<fieldset>
    <div class="form-group">
        <?php echo form_input($identity);?>
    </div>
    <div class="form-group">
        <?php echo form_input($password);?>
    </div>
    <div class="checkbox">
        <label>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?><?php echo lang('login_remember_label');?>
        </label>
    </div>
   
    <!-- Change this to a button or input when using this as a form -->
    <p><?php echo form_submit('submit', lang('login_submit_btn'), array('class' => 'btn btn-lg btn-success btn-block'));?></p>
</fieldset>
</form>

