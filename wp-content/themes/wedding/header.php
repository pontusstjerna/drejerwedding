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
</body>
</html>