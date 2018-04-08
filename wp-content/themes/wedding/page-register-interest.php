<?php /*
    Template Name: Register Interest
*/?>

<div class="page-spacey-background">
    <div class="page-spacey-container">
        <?php echo apply_filters('the_content', $page->post_content); ?>
    
        <h3>
            <span id="days-left">
                <?php echo getWeddingDate($page->ID); ?>
            </span> 
            <?php echo ' ' . get_post_meta($page->ID, 'days_left', true); ?>
        </h3>
        <img id="leaf" <?php echo 'src="' . get_template_directory_uri() . '/assets/leaf.png"' ?>>
        <p><?php echo get_post_meta($page->ID, 'register_interest', true); ?> </p>
    </div>
</div>

<?php 

function getWeddingDate($page_id) {
    $meta = get_post_meta($page_id, 'when', true);
    return explode("\n", $meta)[1];
}

?>