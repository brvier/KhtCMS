<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">

	<head>		
		
		<meta charset="utf-8">
        <meta name="description" content="Benoît HERVIER (Khertan) Developer Web Site : Maemo, MeeGo, Python and Open source software" />
        <meta name="keywords" content="Maemo, MeeGo, Python, Software, Developer" />
        <meta name="author" content="Benoît HERVIER">
        <meta name="wot-verification" content="64f0ac308d5a2d36b5d3"/> 
        
		<title><?php echo $config['Title'] . $Kht_Title; ?></title>		                        
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
               	                                        
                <a href="/" title="Khertan.net Logo"><img src="<?php echo $config['InstallPath']; ?>/template/styles/logo.png" width=122 height=127></a>               
                <h1>Benoît HERVIER</h1>
                <div id="nav">
                	
                	<ul>                 	     	
						<li><a href="/about" title ="Link to the About Page" <?php if ($Kht_CurrentPage === 'about.md') echo 'class="current"'; ?>>About & Contact</a><span>/</span></li>
						<li><a href="/blog" title ="Link to the Home Page" <?php if ($Kht_CurrentPage === 'blog') echo 'class="current"'; ?>>Blog</a><span>/</span></li>
						<li><a href="/projects" title ="Link to the Software Page" <?php if ($Kht_CurrentPage === 'projects') echo 'class="current"'; ?>>Projects</a><span></span></li>
            		</ul>            	
                </div>                
            </div>
                        
	        <div id="main">
                <div id="content">
                <?php 

                        foreach ($Kht_Content as $post) {
                            echo '<div class="article">'.$post['data'].'<p class="meta">'.strftime('%A %d %B %Y',$post['date']).' / '.$post['tags'].'</p>'.'</div>';
                        }
                        echo '<p class="archive-link"><a href="/archives">Archives</a></p>';

                ?>
                </div>
    		</div>
    
    		<div id="footer">
    		 
    			<div class="footer-line"></div> 

				<p class="copyright"><a rel="license" href="http://creativecommons.org/licenses/by/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/80x15.png" width=80 height=15 /></a><br />Benoît HERVIER (Khertan) - Powered by KhtCMS</p>
				 
			</div>
					         		   
	</body>
	 
</html>
