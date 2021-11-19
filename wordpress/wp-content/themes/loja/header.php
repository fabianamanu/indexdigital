<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css" >
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>" >
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
         <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>
 