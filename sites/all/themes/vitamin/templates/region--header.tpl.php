<div<?php print $attributes; ?>>

	<div class="block block-date">
		<?php print $date; ?>
    </div>

	<div class="block block-logo">
	  <?php if ($linked_logo_img): ?>
	    <?php print $linked_logo_img; ?>
	  <?php endif; ?>
	</div>

	<!-- Remove this block later, when task 2.4 is finished. -->
	<div class="block block-last-issue">
        <div class="left">
            <div class="issue-number">Выпуск № 5</div>
            <div class="issue-date">март 2014</div>
            <div class="title">Витамин здоровья</div>
            <div class="body">В погоне за амфетамином. Витамин С</div>
            <div class="links">
                <a href="#">Скачать</a>
                <a href="#">Полистать</a>
            </div>
        </div>
        <div class="right">
            <img src="sites/all/themes/vitamin/images/oblozhka_small.png" alt="">
        </div>
    </div>
    <!-- Close Remove  -->

	<?php print $content; ?>


</div>