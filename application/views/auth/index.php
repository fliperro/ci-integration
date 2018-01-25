<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> <?php echo lang('index_heading');?></h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-users fa-fw"></i> <?php echo lang('index_subheading');?>
            </div>
			<div class="panel-body">

				<p>
					<?php echo anchor('auth/create_user', lang('index_create_user_link'))?>
					<?php echo anchor('auth/create_group', lang('index_create_group_link'), array('class' => 'btn btn-link'))?>
				</p>

				<table width="100%" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th><?php echo lang('index_fname_th');?></th>
							<th><?php echo lang('index_lname_th');?></th>
							<th><?php echo lang('index_email_th');?></th>
							<th><?php echo lang('index_groups_th');?></th>
							<th><?php echo lang('index_status_th');?></th>
							<th><?php echo lang('index_action_th');?></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($users as $user):?>
						<tr>
							<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
							<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'), array('class' => 'btn btn-link')) ;?><br />
								<?php endforeach?>
							</td>
							<td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link'), array('class' => 'btn btn-link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'), array('class' => 'btn btn-link'));?></td>
							<td><?php echo anchor("auth/edit_user/".$user->id, 'Edit', array('class' => 'btn btn-link')) ;?></td>
						</tr>
					<?php endforeach;?>
					</tbody>
				</table>

			</div>
		<div>
	<div>
<div>

