<!DOCTYPE html>
<html lang=<?php echo $config['Lang']; ?>>
    <head>
        <meta charset="utf-8">
        <title><?php echo $config['Title'] .' : '. $Kht_Title; ?></title>		   	                        
        <link title="<?php echo $config['Title']; ?> News"  rel="alternate"  type="application/rss+xml"  href="<?php echo Kht_GetRootPath(); ?>/rss.php" />
        <link rel="stylesheet" href="<?php echo Kht_GetThemePath(); ?>/styles/style.css" media="screen" /> 
        
        <meta name="description" content="<?php echo $config['Description']; ?>" />
        <meta name="keywords" content=".<?php echo $config['Keywords']; ?>" />
        <meta name="author" content="<?php echo $config['Author']; ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link rel="stylesheet" href="<?php echo Kht_GetThemePath();  ?>/css/main.css">
        <script src="<?php echo Kht_GetThemePath();  ?>/js/html5.js"></script>
    </head>
    <body>

        <div class="container">
            <header class="site-header cf" role="banner">
                <div class="site-logo">
                   <img src="<?php echo Kht_GetThemePath() ; ?>/img/logo.png" alt="Khertan.net"><br/><?php echo $config['Author']; ?>
                </div>
                <ul class="site-nav inline-block-list">
                         <?php 
                                foreach ($config['Menu'] as $link => $title) {       
                                    echo '<li><a href="'.$link.'" title= "'.$title.'">'.$title.'</a></li>';                                     
                                }
                          ?>
                </ul>
            </header><!-- end site-header -->

            <div class="site-promo">
                <!--<h1><?php echo $config['Slogan']; ?></h1>-->
                <p class="description"><?php echo $config['Promo']; ?></p>
            </div><!-- end site-promo -->
            
        </div>

        <div class="site-content">
            <div class="container">