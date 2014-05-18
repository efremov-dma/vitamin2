<div<?php print $attributes; ?>>
  <?php if ($main_menu): ?>
    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('menu')))); ?>      
  <?php endif; ?>
  <?php print $content; ?>
</div>
