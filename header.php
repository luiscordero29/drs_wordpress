<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="UTF-8">
        <title><?php wp_title(); ?></title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <!-- Bootstrap core CSS -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Bootstrap Theme -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
        <!-- font-awesome -->
        <link href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <?php wp_head(); ?>

        <?php if (is_user_logged_in()): ?>
            <style type="text/css">
            </style>
        <?php endif;  ?>

        <?php /* ?>
        <link rel="icon" type="image/gif" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.gif" />
        <link rel="icon" type="image/x-icon" href="http://example.com/favicon.ico" />
        <link rel="icon" type="image/png" href="http://example.com/favicon.png" />
        <link rel="icon" type="image/gif" href="http://example.com/favicon.gif" />

        <!-- Opera Speed Dial Favicon -->
        <link rel="icon" type="image/png" href="/speeddial-160px.png" />

        <!-- Standard Favicon -->
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />

        <!-- For iPhone 4 Retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png">

        <!-- For iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png">

        <!-- For iPhone: -->
        <link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-57x57-precomposed.png">
        */ ?>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>