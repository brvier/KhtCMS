<?php include('header.php'); ?>
                        
	        <div id="main">
                <div id="content">
                <?php 

                    echo '<div class="article">';
                    echo '<h1>Archives</h1>';                    
                    $curr_month = '';
                    foreach ($Kht_Content as $post) {
                        $monthyear = strftime('%b %Y',$post['date']);
                        if ($curr_month != $monthyear){
                            if ($curr_month != '')
                                echo '</ul></p>';
                            echo '<p><strong>'.$monthyear.'</strong><ul>';
                            $curr_month = $monthyear;
                        }                                                    
                        echo '<li><a href="'.$post['link'].'">'.$post['title'].'</a></li>';
                    }
                    if ($curr_month != '')
                        echo '</ul></p>';
                    echo '</div>';

                ?>
                </div>
    		</div>
    
<?php include('footer.php'); ?>