<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $config['Lang']; ?>">

	<head>		
		
		<meta charset="utf-8">
        <meta name="description" content="<?php echo $config['Description']; ?>" />
        <meta name="keywords" content=<?php echo $config['Keywords']; ?> />
        <meta name="author" content="<?php echo $config['Author']; ?>">
        
		<title><?php echo $config['Title'] .' : '. $Kht_Title; ?></title>		   	                        
        <link title="<?php echo $config['Title']; ?> News"  rel="alternate"  type="application/rss+xml"  href="<?php echo Kht_GetRootPath(); ?>/rss.php" />
        <link rel="stylesheet" href="<?php echo Kht_GetThemePath(); ?>/styles/style.css" /> 
        
        <link type="text/css" rel="stylesheet" href="<?php echo Kht_GetThemePath(); ?>/syntaxhighlighter/styles/shThemeRDark.css"/>
		<script src="<?php echo Kht_GetThemePath() ; ?>/syntaxhighlighter/scripts/shCore.js" type="text/javascript"></script>
        <script src="<?php echo Kht_GetThemePath() ; ?>/syntaxhighlighter/scripts/shAutoloader.js" type="text/javascript"></script>
        <script src="<?php echo Kht_GetThemePath();  ?>/syntaxhighlighter/scripts/shBrushPython.js" type="text/javascript"></script>
 
        
        <script type="text/javascript">
            SyntaxHighlighter.all();
        </script>

        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-5504886-1']);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
	</head> 
	
    <body> 
        <div id="header"> 
               	                                        
                <a href="/" title="<?php echo $config['Title']; ?> Logo"><img src="<?php echo Kht_GetThemePath(); ?>/styles/logo.png" width=122 height=127></a>               
                <h1><?php echo $config['Title']; ?></h1>
                <div id="nav">
                	
                	<ul>                 	     	
                         <?php 
                                foreach ($config['Menu'] as $link => $title) {       
                                    if (Kht_IsCurrentPage($link)) {
                                        echo '<li><a href="'.$link.'" class="current" title= "'.$title.'">'.$title.'</a><span> </span></li>'; 
                                    } else {
                                        echo '<li><a href="'.$link.'" title= "'.$title.'">'.$title.'</a><span> </span></li>';
                                    }
                                }
                          ?>           		
                    </ul>            	
                </div>                
            </div>
                        
