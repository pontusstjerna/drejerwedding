<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Herr+Von+Muellerhoff" rel="stylesheet">
    <title>#drejerwedding</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="header-container">
        <div class="menu-container">
            <?php
                $pages = get_pages();
                foreach($pages as $page) {
                    $menuItem = '<a class="menu-item" href="#' . $page->post_name . '">' . $page->post_title . '</a>';
                    echo $menuItem;
                }
            ?>
        </div>
    </div>
</body>
</html>