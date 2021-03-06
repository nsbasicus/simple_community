<h2>Listing Profiles</h2>
<br>
<?php if ($profiles): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>User id</th>
			<th>About</th>
			<th>Profile image</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($profiles as $profile): ?>		<tr>

			<td><?php echo $profile->user_id; ?></td>
			<td><?php echo $profile->about; ?></td>
			<td><?php echo $profile->profile_image; ?></td>
			<td>
				<?php echo Html::anchor('admin/profile/view/'.$profile->id, 'View'); ?> |
				<?php echo Html::anchor('admin/profile/edit/'.$profile->id, 'Edit'); ?> |
				<?php echo Html::anchor('admin/profile/delete/'.$profile->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Profiles.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('admin/profile/create', 'Add new Profile', array('class' => 'btn btn-success')); ?>

</p>
