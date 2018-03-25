
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
        foreach($pages as $page): 
    ?>
        <div id="<?php echo $page->post_name ?>" <?php setPageClass($page->menu_order, true); ?>>
            <div <?php setPageClass($page->menu_order, false); ?>>
                <?php echo $page->post_content ?>
            </div>
        </div>
    <?php endforeach; ?>
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