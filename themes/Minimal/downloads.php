<?php include('header.php'); ?>
             
                        <h1>Downloads</h1>
                        <?php 
                                global $config;
                                function _format_bytes($a_bytes)
                                {
                                    if ($a_bytes < 1024) {
                                        return $a_bytes .' B';
                                    } elseif ($a_bytes < 1048576) {
                                        return round($a_bytes / 1024, 2) .' KiB';
                                    } elseif ($a_bytes < 1073741824) {
                                        return round($a_bytes / 1048576, 2) . ' MiB';
                                    } elseif ($a_bytes < 1099511627776) {
                                        return round($a_bytes / 1073741824, 2) . ' GiB';
                                    } elseif ($a_bytes < 1125899906842624) {
                                        return round($a_bytes / 1099511627776, 2) .' TiB';
                                    } elseif ($a_bytes < 1152921504606846976) {
                                        return round($a_bytes / 1125899906842624, 2) .' PiB';
                                    } elseif ($a_bytes < 1180591620717411303424) {
                                        return round($a_bytes / 1152921504606846976, 2) .' EiB';
                                    } elseif ($a_bytes < 1208925819614629174706176) {
                                        return round($a_bytes / 1180591620717411303424, 2) .' ZiB';
                                    } else {
                                        return round($a_bytes / 1208925819614629174706176, 2) .' YiB';
                                    }
                                }                               
                                
                                                       
                                function recursePrint($array, $level) {
                                    
                                    
                                    foreach ($array as $dir => $file) {
                                        if (gettype($file) == 'array') {
                                            echo "<h$level><i class=\"icon-folder-open\"></i>".basename($dir)."</h$level><ul>";
                                            krsort($file);
                                            recursePrint($file, $level+1);
                                            echo '</ul>';
                                            }                                    
                                        else {
                                            echo "<li><a href=\"/".$config['InstallPath'].$dir."\">".$file." ("._format_bytes(filesize($dir)).")</a></li>";
                                        }
                                    }
                                }
                                                                
                                ksort($Kht_Content);
                                recursePrint($Kht_Content,2);
                                
                        ?>
    
<?php include('footer.php'); ?>
