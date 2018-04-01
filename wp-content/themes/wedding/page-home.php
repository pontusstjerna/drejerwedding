<?php /*
    Template Name: Home
*/?>

<div class="page-home-parallax-background">
    <div class="page-home-background">
        <div class="page-home-container">
            <?php echo apply_filters('the_content', $page->post_content); ?>
        </div>
    </div>
</div>
