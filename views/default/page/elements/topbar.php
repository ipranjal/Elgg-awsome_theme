<?php

?>


<div class="elgg-navbar">
    <div class="elgg-navbar-inner">
        <?php echo elgg_view('core/account/login_dropdown'); ?>
		<?php echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz'))); ?>
        <?php echo elgg_view('search/search_box', array('class' => 'elgg-search-header')); ?>
    </div><!-- /.elgg-navbar-inner -->
</div><!-- /.elgg-navbar -->

