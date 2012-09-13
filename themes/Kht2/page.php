<?php include('header.php'); ?>

                    <div class="article">
                        <?php echo $Kht_Content['data']; ?>
                        <p class="meta">                                                
                        <?php 
                                if (isset($Kht_Content['date']) && isset($Kht_Content['tags']))
                                    echo strftime('%A %d %B %Y',$Kht_Content['date']).' / '.$Kht_Content['tags']; 
                        ?>
                        </p>
                    </div>
    
<?php include('footer.php'); ?>