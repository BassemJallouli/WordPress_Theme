<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
    <?phpbloginfo('name');
    if ($current_post_title = get_the_title()) {
        echo '|' . $current_post_title;
    }
    ?>
    </title>
    <?php wp_head(); ?>
</head>
<body>
    <h1>
    <?php
    bloginfo('name');
    if ($current_post_title = get_the_title()) {
        echo '|' . $current_post_title;
    }
    ?>
    </h1>
    <nav>
        <h2>Website Navigation</h2>
        <?php wp_nan_menu( array(
            'theme_location' => 'main_menu'
        ));
        ?>
    </nav>