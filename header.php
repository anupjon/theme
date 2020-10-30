<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <title><?php wp_title(''); ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/>

    <link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
      
    <?php wp_head();?>    
    <?php
    $bodyclassname = '';
    if (is_front_page()){
        $bodyclassname = 'home-page';
    }else {
        $bodyclassname = $pagename;
    }

    ?>
        <script>
            var site_url = '<?php echo site_url(); ?>';
            var site_theme_path = '<?php echo get_template_directory_uri(); ?>';
            var ajax_url = "<?php echo admin_url( 'admin-ajax.php' );?>";
        </script>     
    </head>
    <body class="<?php echo $bodyclassname; ?>">

    <header></header>