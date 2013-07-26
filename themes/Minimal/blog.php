<?php include('header.php'); ?>
                        
                <?php 
        
                        foreach ($Kht_Content as $post) {
                            echo '<h1>'.$post['title'].'</h1><div class="span8">'.'<p><i class="icon-calendar"></i>'.strftime('%A %d %B %Y',mktime(0,0,0,$post['date']['tm_mon'] + 1 ,
                                                                                                                                          $post['date']['tm_mday'],
                                                                                                                                          $post['date']['tm_year'] + 1900 )).'</p><p><i class="icon-tags"></i> '.$post['tags'].'</p></div>'.$post['data'].'';
                        }                        

                ?>
                
    
<?php include('footer.php'); ?>
