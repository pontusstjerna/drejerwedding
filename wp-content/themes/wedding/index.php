<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>
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
</body>
</html>