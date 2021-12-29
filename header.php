<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(is_home()) { wp_title(); } else { bloginfo("name"); }?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/bootstrap-5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/style/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
