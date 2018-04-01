<?php /*
    Template Name: Frame
*/?>

<div class="page-frame-background">
    <div class="page-frame-container">
        <?php echo apply_filters('the_content', $page->post_content); ?>
    </div>
</div>