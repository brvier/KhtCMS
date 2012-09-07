<?php
  
    /**
    * KhtCms
    *
    * @author Benoît HERVIER
    * @copyright 2011 Benoît HERVIER khertan@khertan.net
    *
    * This library is free software; you can redistribute it and/or
    * modify it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE
    * License as published by the Free Software Foundation; either
    * version 3 of the License, or any later version.
    *
    * This library is distributed in the hope that it will be useful,
    * but WITHOUT ANY WARRANTY; without even the implied warranty of
    * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    * GNU AFFERO GENERAL PUBLIC LICENSE for more details.
    *
    * You should have received a copy of the GNU Affero General Public
    * License along with this library.  If not, see <http://www.gnu.org/licenses/>.
    *
    */

    //General Conf
    $config = array(
                                            'Name' => 'Khertan.net',
                                            'Title' => 'BenoÃ®t HERVIER', 
                                            'Description' => 'BenoÃ®t HERVIER (Khertan) Developer Web Site : Maemo, MeeGo, Python and Open source softwares',
                                            'Keywords' => 'Maemo, MeeGo, Python, Software, Developer',
                                            'Author' => 'BenoÃ®t HERVIER',
                                            'Lang' => 'en-GB',
                                            'Menu' => array('About'=>'About & Contact',
                                                                      'Blog' => 'Blog',
                                                                       'Projects' => 'Projects',
                                                                     ),
                                            'Default' => 'Blog',
                                            'Licence' => 'http://creativecommons.org/licenses/by/3.0/',
                                            'UseCache' => False,
                                            'InstallPath' => '/KhtCMS/',
                                            
    );
    
    //DO NOT EDIT BEYONG THIS LINE
    if (!@file_exists($config['InstallPath'].'.htaccess')) {
        $content = "SetEnv PHP_VER 5";
        $content .= "\n";
        $content .= "\n";
        $content .= "SetEnv REGISTER_GLOBALS 0";
        $content .= "SetEnv ZEND_OPTIMIZER 1";
        $content .= "SetEnv MAGIC_QUOTES 0";
        $content .= "# Activer le filtre";
        $content .= "SetOutputFilter DEFLATE";
        $content .= "\n";
        $content .= "# Certains navigateurs ne peuvent pas avoir GZIP (les vieux)";
        $content .= "BrowserMatch ^Mozilla/4 gzip-only-text/html";
        $content .= "\n";
        $content .= "# Certains navigateurs ne peuvent pas avoir GZIP (les vieux)";
        $content .= "BrowserMatch ^Mozilla/4\.0678 no-gzip";
        $content .= "\n";
        $content .= "# On ne veut pas d'IE";
        $content .= "BrowserMatch \bMSIE !no-gzip !gzip-only-text/html";
        $content .= "\n";
        $content .= "# On ne compresse pas les images, elles le sont deja .";
        $content .= "SetEnvIfNoCase Request_URI \.(?:gif|jpe?g|png)$ no-gzip dont-vary";
        $content .= "\n";
        $content .= "\n";
        $content .= "RewriteEngine on";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f";
        $content .= "RewriteRule ^medias/(.*)$ ".$$config['InstallPath']."datas/medias/$1 [QSA,L]";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f  [NC]";
        $content .= "RewriteRule ^blog/(.*\.(gif|jpg|png))$ ".$$config['InstallPath']."datas/medias/$1 [QSA,L]";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f  [NC]";
        $content .= "RewriteRule ^(.*\.(gif|jpg|png))$ ".$$config['InstallPath']."datas/medias/$1 [QSA,L]";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f  [NC]";
        $content .= "RewriteRule ^softwares/(.*)$ ".$$config['InstallPath']."$1 [QSA,L]";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f  [NC]";
        $content .= "RewriteCond %{REQUEST_URI} !^/owncloud  [NC]";
        $content .= "RewriteRule ^(.*) ".$$config['InstallPath']."index.php?path=$1 [E=REMOTE_USER:%{HTTP:Authorization},L]";
        file_put_contents($$config['InstallPath'].'.htaccess',$content);
    }
    

?>
