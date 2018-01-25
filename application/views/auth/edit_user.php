<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> <?php echo lang('edit_user_heading');?></h1>
    </div>
</div>

<?php //echo lang('edit_user_subheading');?>

<div class="row">
    <div class="col-lg-3 col-xs-12">
        <?php if(!empty($auth_message)): ?>
            <div class="alert alert-danger">
                <?php echo $auth_message; ?>
            </div>
        <?php endif; ?>

        <?php echo form_open(uri_string(), 'role="form"'); ?>

            <?php echo form_hidden('id', $user->id);?>
            <?php echo form_hidden($csrf); ?>

            <div class="form-group">
                <label class="control-label"><?php echo lang('edit_user_fname_label');?></label>
                <?php echo form_input($first_name);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('edit_user_lname_label');?></label>
                <?php echo form_input($last_name);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('edit_user_company_label');?></label>
                <?php echo form_input($company);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('edit_user_phone_label');?></label>
                <?php echo form_input($phone);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('edit_user_password_label');?></label>
                <?php echo form_input($password);?>
            </div>
            <div class="form-group">
                <label class="control-label"><?php echo lang('edit_user_password_confirm_label');?></label>
                <?php echo form_input($password_confirm);?>
            </div>

            <?php if ($this->ion_auth->is_admin()): ?>

                <div class="form-group">
                    <label><?php echo lang('edit_user_groups_heading');?></label>
                    <?php foreach ($groups as $group):?>
                        <?php
                            $gID=$group['id'];
                            $checked = null;
                            $item = null;
                            foreach($currentGroups as $grp) {
                                if ($gID == $grp->id) {
                                $checked= ' checked="checked"';
                                break;
                                }
                            }
                        ?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                                <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                            </label>     
                        </div>        
                    <?php endforeach; ?> 
                </div>
            <?php endif ?>

            <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-success submit'), lang('edit_user_submit_btn'));?>

        <?php echo form_close(); ?>
    </div>
</div>
