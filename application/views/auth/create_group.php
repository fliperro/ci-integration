<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> <?php echo lang('create_group_heading');?></h1>
    </div>
</div>

<?php //echo lang('create_group_subheading');?>

<div class="row">
    <div class="col-lg-3 col-xs-12">
        <?php if(!empty($auth_message)): ?>
            <div class="alert alert-danger">
                <?php echo $auth_message; ?>
            </div>
        <?php endif; ?>

        <?php echo form_open(uri_string(), 'role="form"'); ?>

            <div class="form-group">
                <label class="control-label"><?php echo lang('create_group_name_label');?></label>
                <?php echo form_input($group_name);?>
            </div>

            <div class="form-group">
                <label class="control-label"><?php echo lang('create_group_desc_label');?></label>
                <?php echo form_input($description);?>
            </div>

            <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-success submit'), lang('create_group_submit_btn'));?>

        <?php echo form_close(); ?>
    </div>
</div>