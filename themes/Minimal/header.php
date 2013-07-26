<!DOCTYPE html>
<html lang=<?php echo $config['Lang']; ?>>
    <head>
        <meta charset="utf-8">
        <title><?php echo $config['Title'] .' : '. $Kht_Title; ?></title>		   	                        
        <link title="<?php echo $config['Title']; ?> News"  rel="alternate"  type="application/rss+xml"  href="<?php echo Kht_GetRootPath(); ?>/rss.php" />        
        <meta name="description" content="<?php echo $config['Description']; ?>" />
        <meta name="keywords" content=".<?php echo $config['Keywords']; ?>" />
        <meta name="author" content="<?php echo $config['Author']; ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
        <link rel="stylesheet" href="<?php echo Kht_GetThemePath();  ?>/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo Kht_GetThemePath();  ?>/bootstrap/css/bootstrap-responsive.css">    
        <link rel="stylesheet" href="<?php echo Kht_GetThemePath();  ?>/style.css">            
        <link rel="shortcut icon" href="<?php echo Kht_GetThemePath();  ?>/img/favicon.ico">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                
                  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <a class="brand" href="index.php"><img src="<?php echo Kht_GetThemePath();  ?>/img/mini-logo.png" /><?php echo $config['Author']; ?></a>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                             <?php 
                                    foreach ($config['Menu'] as $link => $title) {
                                        if (Kht_IsCurrentPage($link))
                                          echo '<li><a href="'.$link.'" title= "'.$title.'" class="active">'.$title.'</a></li>';                 
                                        else
                                          echo '<li><a href="'.$link.'" title= "'.$title.'">'.$title.'</a></li>';                       
                                    }
                             ?>
                    </ul>
                </div>                
             </div>
        </div>
    </div>

    <div class="container">
        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <?php
                foreach (Kht_Pages() as $category => $pages) {
                  echo '<li class="nav-header">'.$category.'</li>';
                  foreach ($pages as $title => $link) {
                    echo '<li><a href="'.$link.'">'.$title.'</a></li>';
                  }
                }
              ?>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span8">    
