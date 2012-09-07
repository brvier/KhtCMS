<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">

	<head>		
		
		<meta charset="utf-8">
        <meta name="description" content="<?php echo $config['Description']; ?>" />
        <meta name="keywords" content=<?php echo $config['Keywords']; ?> />
        <meta name="author" content="<?php echo $config['Author']; ?>">
        
		<title><?php echo $config['Title'] .' : '. $Kht_Title; ?></title>		                        
        <link title="<?php echo $config['Title']; ?> News"  rel="alternate"  type="application/rss+xml"  href="<?php echo $config['InstallPath']; ?>/rss.php" />
        <link rel="stylesheet" href="<?php echo $config['InstallPath']; ?>/template/styles/style.css" /> 
        
        <link type="text/css" rel="stylesheet" href="<?php echo $config['InstallPath']; ?>/template/syntaxhighlighter/styles/shThemeRDark.css"/>
		<script src="<?php echo $config['InstallPath']; ?>/template/syntaxhighlighter/scripts/shCore.js" type="text/javascript"></script>
        <script src="<?php echo $config['InstallPath']; ?>/template/syntaxhighlighter/scripts/shAutoloader.js" type="text/javascript"></script>
        <script src="<?php echo $config['InstallPath']; ?>/template/syntaxhighlighter/scripts/shBrushPython.js" type="text/javascript"></script>
 
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
               	                                        
                <a href="/" title="<?php echo $config['Title']; ?> Logo"><img src="<?php echo $config['InstallPath']; ?>/template/styles/logo.png" width=122 height=127></a>               
                <h1><?php echo $config['Title']; ?></h1>
                <div id="nav">
                	
                	<ul>                 	     	
                         <?php 
                                foreach ($config['Menu'] as $link => $title) {       
                                    if ($Kht_CurrentPath === $link) {
                                        echo '<li><a href="'.$link.'" class="current" title= "'.$title.'">'.$title.'</a><span> </span></li>'; 
                                    } else {
                                        echo '<li><a href="'.$link.'" title= "'.$title.'">'.$title.'</a><span> </span></li>';
                                    }
                                }
                          ?>           		</ul>            	
                </div>                
            </div>
                        
	        <div id="main">
                <div id="content">
                    <div class="article">
                        <?php echo $Kht_Content; ?>
                    </div>
                </div>
    		</div>
    
    		<div id="footer">
    		 
    			<div class="footer-line"></div> 

				<p class="copyright"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/80x15.png" width=80 height=15 /></a><br />Benoît HERVIER (Khertan) - Powered by KhtCMS</p>
				 
			</div>
					         		   
	</body>
	 
</html>
