<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> <?php echo lang('deactivate_heading');?></h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <p class="text-danger"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
        
        <?php echo form_open("auth/deactivate/".$user->id);?>

            <?php echo form_hidden($csrf); ?>
            <?php echo form_hidden(array('id'=>$user->id)); ?>

            <div class="form-group">
                <label class="radio-inline">
                    <input type="radio" name="confirm" value="yes" checked="checked" /><?php echo lang('deactivate_confirm_y_label');?>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="confirm"  value="no"  />  <?php echo lang('deactivate_confirm_n_label');?>
                </label>
            </div>

            <?php echo form_button(array('type' => 'submit', 'class' => 'btn btn-success submit'), lang('deactivate_submit_btn'));?>
 
        <?php echo form_close();?>

    </div>
</div>

