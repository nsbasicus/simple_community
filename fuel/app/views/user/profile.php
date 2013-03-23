<div class="page-header">
  <?php echo Html::anchor('user/edit/'.$user->id, 'Edit', array('class'=>'btn btn-primary pull-right')); ?>
  <h2><?php echo $user->first_name.' '.$user->last_name; ?></h2>
</div>
<div class="row">
  <div class="span3">
    <?php
        if ($user->profile_image)
          echo Html::img($user->profile_image);
        else
          echo Html::img("http://placehold.it/210x240");;
      ?>
  </div>
  <div class="span3">
    <?php foreach($user_data as $field_name => $value): ?>
      <p><b><?php echo $field_name; ?></b>: <?php echo $value; ?></p>
    <?php endforeach; ?>
  </div>
  <div class="span6">
    <?php echo Markdown::parse($user->about); ?></p>
  </div>
</div>