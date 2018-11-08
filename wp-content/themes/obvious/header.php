<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127180846-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-127180846-1');
    </script>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wedesigner et UX/UI Designer - conception de sites et plateformes, création d'interfaces ergonomiques - en recherche active">
    <meta name="author" content="bastien geneix">

    <title>Webdesigner, UX/UI designer - Portfolio Bastien geneix</title>
    
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); <?php wp_head(); ?>
</head>

<body>
    
   <header class="navsite">
      <!--    NAVIGATION DU SITE VERSION ORDINATEUR    -->
       <div class="navsite__desk">
           <a href="http://bastiengeneix.yj.fr/portfolio/" class="navsite__desk--logo">
           <img src="/img/obivious_blanc.png">
                   </a>              
           <?php 
                wp_nav_menu(array(
                    'menu'      => 'navsite-global',
                    'theme_location'    => 'primary',
                    'container'    => 'nav',
                    'container_class'    => 'navsite__desk--nav',
                    'menu_class'      => '', // class du menu
                    'menu_id'      => '', // id du menu
                    )
                );
           ?>
       </div>
      <!--    NAVIGATION DU SITE VERSION PORTABLE    -->
       <div class="navsite__mob">
           <a href="#" class="navsite__desk--logo">
                
        </a> 
           <a href="javascript:void(0)" id="burgerToggle" class="navsite__mob--burger">
              <div class="navsite__mob--burger--container">
                <span class="burger--block block_1"></span>
                <span class="burger--block block_2"></span>
                <span class="burger--block block_3"></span>
              </div>
           </a>             
           
            <?php 
            wp_nav_menu(array(
                'menu'      => 'navsite-global',
                'theme_location'    => 'primary',
                'container'    => 'nav',
                'container_class'    => 'navsite__mob--nav',
                'menu_class'      => '', // class du menu
                'menu_id'      => '', // id du menu
                )
            );
            ?>
       </div>
       
   </header>

<div class="navsite__block--back"></div>