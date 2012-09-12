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
                                            'Menu' => array('/about'=>'About & Contact',
                                                                      '/blog' => 'Blog',
                                                                       '/projects' => 'Projects',
                                                                       '/downloads' => 'Downloads',
                                                                     ),
                                            'Default' => 'Blog',
                                            'Licence' => 'http://creativecommons.org/licenses/by/3.0/',
                                            'UseCache' => False,
                                            'Theme' => 'Kht',
                                            'InstallPath' => '/',
                                            
    );
    
    //DO NOT EDIT BEYONG THIS LINE
    if (@file_exists('./.htaccess')) {
    } else {
        $content = "SetEnv PHP_VER 5\n";
        $content .= "\n";
        $content .= "\n";
        $content .= "SetEnv REGISTER_GLOBALS 0\n";
        $content .= "SetEnv ZEND_OPTIMIZER 1\n";
        $content .= "SetEnv MAGIC_QUOTES 0\n";
        $content .= "\n";
        $content .= "RewriteEngine on\n";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f\n";
        $content .= "RewriteRule ^medias/(.*)$ ".$config['InstallPath']."datas/medias/$1 [QSA,L]\n";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f  [NC]\n";
        $content .= "RewriteRule ^blog/(.*\.(gif|jpg|png))$ ".$config['InstallPath']."datas/medias/$1 [QSA,L]\n";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f  [NC]\n";
        $content .= "RewriteRule ^(.*\.(gif|jpg|png))$ ".$config['InstallPath']."datas/medias/$1 [QSA,L]\n";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f  [NC]\n";
        $content .= "RewriteRule ^softwares/(.*)$ ".$config['InstallPath']."$1 [QSA,L]\n";
        $content .= "\n";
        $content .= "RewriteCond %{REQUEST_FILENAME}  !-f  [NC]\n";
        $content .= "RewriteCond %{REQUEST_URI} !^/owncloud  [NC]\n";
        $content .= "RewriteRule ^(.*) ".$config['InstallPath']."index.php?path=$1 [E=REMOTE_USER:%{HTTP:Authorization},L]";
        file_put_contents('./.htaccess',$content);
    }
    
 
?>
