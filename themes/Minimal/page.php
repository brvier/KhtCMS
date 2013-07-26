<?php include('header.php'); ?>

                        <h1><?php echo $Kht_Content['title']; ?></h1>
                        <?php echo $Kht_Content['data']; ?>
                        <p>                                                
                        <?php 
                                if ( isset($Kht_Content['date']))
                                    echo '<i class="icon-calendar"></i>'.strftime('%A %d %B %Y',mktime(0,0,0,$Kht_Content['date']['tm_mon'] + 1 ,
                                                                                                             $Kht_Content['date']['tm_mday'],
                                                                                                             $Kht_Content['date']['tm_year'] + 1900 ));
                                if ( isset($Kht_Content['tags']))
                                    echo ' <i class="icon-tags"></i> '.$Kht_Content['tags']; 
                        ?>
                        </p>
    
<?php include('footer.php'); ?>
