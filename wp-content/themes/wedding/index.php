
<?php get_header(); ?>
<div class="header-container">
    <div id="menu-container">
        <?php foreach(get_pages(array('sort_column' => 'menu_order')) as $page): ?>
            <button 
                class="menu-item"
                id=<?php echo '"menu-' . $page->post_name . '"' ?>
                >
                <?php echo $page->post_title ?>
            </button>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'news.php' ?>

<div class="body-container">
    <?php 
        $pages = get_pages(array('sort_column' => 'menu_order'));
        foreach($pages as $page) {
            $template = get_page_template_slug($page->ID);
            if ($template) { // We have a template
                include $template;
            } else { // We do not have any template
                echo apply_filters('the_content', $page->post_content);
            }
        }
    ?>
</div>

<?php get_footer(); ?>

<?php 

    function setPageClass($menu_order, $outer) {
        if ($outer) {
            echo 'class="page page-' . $menu_order . '-outer"';
        } else {
            echo 'class="page page-' . $menu_order . '-inner"';
        }
    }

?>