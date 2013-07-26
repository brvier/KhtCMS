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
                                            'Title' => 'Benoît HERVIER', 
                                            'Slogan' => 'Benoît HERVIER',
                                            'Promo' => 'Maemo/Harmattan/Debian addict, Open Source Advocate, Python Qt fan',
                                            'Description' => 'Benoît HERVIER (Khertan) Developer Web Site : Maemo/Harmattan/Debian addict, Open Source Advocate, Python Qt fan and developper',
                                            'Keywords' => 'Maemo, MeeGo, Python, Software, Developer',
                                            'Author' => 'Benoît HERVIER',
                                            'Lang' => 'en-GB',
                                            'Menu' => array('/about'=>'About & Contact',
                                                            '/blog' => 'Blog',
                                                            '/archives' => 'Archives',
                                                            '/downloads' => 'Downloads',),
                                            'Default' => 'Blog',
                                            'Licence' => 'http://creativecommons.org/licenses/by/3.0/',
                                            'UseCache' => True,
                                            'DateFormat' => '%d/%m/%Y',
                                            'NumberOfPosts' => 1,
                                            'Theme' => 'Minimal',
                                            'InstallPath' => '/',
                                            'GoogleAnalyticsIdent' => 'UA-4562123-1',
                                            'ApiKey' => 'whatuwant',          
    );
    
    //DO NOT EDIT BEYONG THIS LINE
    if (@file_exists('./.htaccess')) {
    } elseif (@file_exists('./htaccess')) {        
        $htaccess = file_get_contents('./htaccess');
        file_put_contents('./.htaccess',$htaccess);
    }
    
 
?>
