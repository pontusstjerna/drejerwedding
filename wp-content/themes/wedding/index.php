
<?php get_header(); ?>
<div class="header-container">
    <div id="menu-container">
        <?php foreach(get_pages() as $page): ?>
            <button 
                class="menu-item"
                id=<?php echo '"menu-' . $page->post_name . '"' ?>
                >
                <?php echo $page->post_title ?>
            </button>
        <?php endforeach; ?>
    </div>
</div>
<div class="body-container">
    <?php 
        $pages = get_pages();
        foreach($pages as $page): 
    ?>
        <div id="<?php echo $page->post_name ?>" class="content-container">
            <p class="content-header"><?php echo $page->post_title ?></p>
            <?php echo $page->post_content ?>
        </div>
    <?php endforeach; ?>
</div>
<?php get_footer(); ?>