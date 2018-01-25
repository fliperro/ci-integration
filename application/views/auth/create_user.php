<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> <?php echo lang('create_user_heading');?></h1>
    </div>
</div>

<?php //echo lang('create_user_subheading');?>

<div class="row">
    <div class="col-lg-3 col-xs-12">
        <?php if(!empty($auth_message)): ?>
            <div class="alert alert-danger">
                <?php echo $auth_message; ?>
            </div>
        <?php endif; ?>

        <?php echo form_open(uri_string(), 'role="form"'); ?>
            <div class="form-group">
                <label class="control-label"><?php echo lang('create_user_fname_label');?></label>
                <?php echo form_input($first_name);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('create_user_lname_label');?></label>
                <?php echo form_input($last_name);?>
            </div>
            
            <?php if($identity_column!=='email'): ?>

            <div class="form-group">
                <label class="control-label"><?php echo lang('create_user_identity_label');?></label>
                <?php echo form_input($identity);?>
            </div>

            <?php endif; ?>

            <div class="form-group">
                <label class="control-label"><?php echo lang('create_user_company_label');?></label>
                <?php echo form_input($company);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('create_user_email_label');?></label>
                <?php echo form_input($email);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('create_user_phone_label');?></label>
                <?php echo form_input($phone);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('create_user_password_label');?></label>
                <?php echo form_input($password);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('create_user_password_confirm_label');?></label>
                <?php echo form_input($password_confirm);?>
            </div>

            <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-success submit'), lang('create_user_submit_btn'));?>

        <?php echo form_close(); ?>
    </div>
</div>
