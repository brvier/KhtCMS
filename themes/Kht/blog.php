<?php include('header.php'); ?>
                        
	        <div id="main">
                <div id="content">
                <?php 

                        foreach ($Kht_Content as $post) {
                            echo '<div class="article">'.$post['data'].'<p class="meta">'.strftime('%A %d %B %Y',$post['date']).' / '.$post['tags'].'</p>'.'</div>';
                        }
                        echo '<p class="archive-link"><a href="'.Kht_GetRootPath().'archives">Archives</a></p>';

                ?>
                </div>
    		</div>
    
<?php include('footer.php'); ?>