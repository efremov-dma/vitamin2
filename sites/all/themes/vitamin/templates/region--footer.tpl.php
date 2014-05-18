<div<?php print $attributes; ?>>
  <div class="footer-menu">

    <div class="footer-menu-block">
      <?php if ($main_menu): ?>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('class' => array('menu')))); ?>      
      <?php endif; ?>
    </div>

    <div class="copyright-footer-block">
      <?php print $copy; ?>
    </div>

  </div>
    <?php print $content; ?>
</div>