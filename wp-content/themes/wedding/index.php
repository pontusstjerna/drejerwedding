<?php get_header(); ?>
<div class="body-container">
    <?php 
        $pages = get_pages();
        foreach($pages as $page) {
            echo $page->post_content;
        }
    ?>
</div>