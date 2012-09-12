<?php include('header.php'); ?>

	        <div id="main">
                <div id="content">                    
                    <div class="article">
                        <h1>Downloads</h1>
                        <?php 
                        
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
                                
                                function endswith($hay, $needle) {
                                  return substr($hay, -strlen($needle)) === $needle;
                                }

                                function recurseDir($dir, $level)
                                {     
                                    if(is_dir($dir)){
                                        if($dh = opendir($dir)){
                                            while(($file = readdir($dh)) !== false){                                            
                                                if($file != '.' && $file != '..'){                                                
                                                    if (!endswith($dir, '/')) {
                                                        $dir .= '/';
                                                    }
                                                    if(!is_dir($dir . $file)) {                                                       
                                                        echo "<p><a href=\"".$dir.$file."\">".$file.' ('._format_bytes(filesize($dir.$file)).")</a></p>\n"; 
                                                    }else{             
                                                        echo "<h$level>" . $file. "</h$level>";
                                                        // since it is a directory we recurse it.
                                                        recurseDir($dir .  $file, $level+1);
                                                    }	
                                                }
                                            }
                                        }
                                        closedir($dh);
                                    }
                                }
                                
                                                        
                                recurseDir($path, 2);
                        ?>
                    </div>
                </div>
    		</div>
    
<?php include('footer.php'); ?>
