<ul class="thumbnails">
<?php foreach ($users as $user): ?>
  <li class="span3">
    <div class="thumbnail">
      <?php
        if ($user->profile_image)
          echo Html::anchor(Model_User::get_url($user->id), Html::img($user->profile_image));
        else
          echo Html::img("http://placehold.it/210x240");
      ?>
      <div class="caption">
        <h5><?php echo Html::anchor(Model_User::get_url($user->id), $user->first_name.' '.$user->last_name); ?></h5>
        <p>More data...</p>
      </div>
    </div>
  </li>
<?php endforeach; ?>
</ul>
<?php echo $pagination; ?>