<div class="page">
    <h2><?php echo $page->post_title; ?></h2>
    <?php echo apply_filters('the_content', $page->post_content); ?>
</div>