<?php include('header.php'); ?>
                        

                <?php 

                        foreach ($Kht_Content as $post) {
                            echo '<div class="article">'.$post['data'].'<p class="meta">'.strftime('%A %d %B %Y',$post['date']).' / '.$post['tags'].'</p>'.'</div>';
                        }
                        echo '<p class="archive-link"><a href="'.Kht_GetRootPath().'archives">Archives</a></p>';

                ?>

    
<?php include('footer.php'); ?>