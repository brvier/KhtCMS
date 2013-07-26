<?php include('header.php'); ?>
                        
                <?php 

                    echo '<div class="container">';
                    echo '<h1>Archives</h1>';                    
                    $curr_month = '';
                    foreach ($Kht_Content as $post) {
                        $monthyear = strftime('%B %Y',mktime(0,0,0,$post['date']['tm_mon'] + 1 ,
                                                                                                                                          $post['date']['tm_mday'],
                                                                                                                                          $post['date']['tm_year'] + 1900 ));
                        if ($curr_month != $monthyear){
                            if ($curr_month != '')
                                echo '</ul></p>';
                            echo '<p><i class="icon-calendar"></i><strong>'.$monthyear.'</strong><ul>';
                            $curr_month = $monthyear;
                        }                                                    
                        echo '<li><a href="'.$post['link'].'">'.$post['title'].'</a></li>';
                    }
                    if ($curr_month != '')
                        echo '</ul></p>';
                    echo '</div>';

                ?>
    
<?php include('footer.php'); ?>
