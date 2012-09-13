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
                                                                       '/projects' => 'Projects',
                                                                       '/downloads' => 'Downloads',
                                                                     ),
                                            'Default' => 'Blog',
                                            'Licence' => 'http://creativecommons.org/licenses/by/3.0/',
                                            'UseCache' => False,
                                            'Theme' => 'Kht2',
                                            'InstallPath' => '/',
                                            'GoogleAnalyticsIdent' => 'UA-5504886-1',
                                            
    );
    
    //DO NOT EDIT BEYONG THIS LINE
    if (@file_exists('./.hhtaccess')) {
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
        $content .= "RewriteRule ^(.*) ".$config['InstallPath']."index.php?path=$1 [E=REMOTE_USER:%{HTTP:Authorization},L]\n\n";
        
        $content_next = <<<EOT
# ----------------------------------------------------------------------
# Proper MIME type for all files
# ----------------------------------------------------------------------

# JavaScript
#   Normalize to standard type (it's sniffed in IE anyways)
#   tools.ietf.org/html/rfc4329#section-7.2
AddType application/javascript         js jsonp
AddType application/json               json

# Audio
AddType audio/ogg                      oga ogg
AddType audio/mp4                      m4a f4a f4b

# Video
AddType video/ogg                      ogv
AddType video/mp4                      mp4 m4v f4v f4p
AddType video/webm                     webm
AddType video/x-flv                    flv

# SVG
#   Required for svg webfonts on iPad
#   twitter.com/FontSquirrel/status/14855840545
AddType     image/svg+xml              svg svgz
AddEncoding gzip                       svgz

# Webfonts
AddType application/vnd.ms-fontobject  eot
AddType application/x-font-ttf         ttf ttc
AddType font/opentype                  otf
AddType application/x-font-woff        woff

# Assorted types
AddType image/x-icon                        ico
AddType image/webp                          webp
AddType text/cache-manifest                 appcache manifest
AddType text/x-component                    htc
AddType application/xml                     rss atom xml rdf
AddType application/x-chrome-extension      crx
AddType application/x-opera-extension       oex
AddType application/x-xpinstall             xpi
AddType application/octet-stream            safariextz
AddType application/x-web-app-manifest+json webapp
AddType text/x-vcard                        vcf
AddType application/x-shockwave-flash       swf
AddType text/vtt                            vtt

# ----------------------------------------------------------------------
# Gzip compression
# ----------------------------------------------------------------------

<IfModule mod_deflate.c>

  # Force deflate for mangled headers developer.yahoo.com/blogs/ydn/posts/2010/12/pushing-beyond-gzipping/
  <IfModule mod_setenvif.c>
    <IfModule mod_headers.c>
      SetEnvIfNoCase ^(Accept-EncodXng|X-cept-Encoding|X{15}|~{15}|-{15})$ ^((gzip|deflate)\s*,?\s*)+|[X~-]{4,13}$ HAVE_Accept-Encoding
      RequestHeader append Accept-Encoding "gzip,deflate" env=HAVE_Accept-Encoding
    </IfModule>
  </IfModule>

  # Compress all output labeled with one of the following MIME-types
  <IfModule mod_filter.c>
    AddOutputFilterByType DEFLATE application/atom+xml \
                                  application/javascript \
                                  application/json \
                                  application/rss+xml \
                                  application/vnd.ms-fontobject \
                                  application/x-font-ttf \
                                  application/xhtml+xml \
                                  application/xml \
                                  font/opentype \
                                  image/svg+xml \
                                  image/x-icon \
                                  text/css \
                                  text/html \
                                  text/plain \
                                  text/x-component \
                                  text/xml
  </IfModule>

</IfModule>


# ----------------------------------------------------------------------
# Expires headers (for better cache control)
# ----------------------------------------------------------------------

# These are pretty far-future expires headers.
# They assume you control versioning with filename-based cache busting
# Additionally, consider that outdated proxies may miscache
#   www.stevesouders.com/blog/2008/08/23/revving-filenames-dont-use-querystring/

# If you don't use filenames to version, lower the CSS and JS to something like
# "access plus 1 week".

<IfModule mod_expires.c>
  ExpiresActive on

# Perhaps better to whitelist expires rules? Perhaps.
  ExpiresDefault                          "access plus 1 month"

# cache.appcache needs re-requests in FF 3.6 (thanks Remy ~Introducing HTML5)
  ExpiresByType text/cache-manifest       "access plus 0 seconds"

# Your document html
  ExpiresByType text/html                 "access plus 0 seconds"

# Data
  ExpiresByType text/xml                  "access plus 0 seconds"
  ExpiresByType application/xml           "access plus 0 seconds"
  ExpiresByType application/json          "access plus 0 seconds"

# Feed
  ExpiresByType application/rss+xml       "access plus 1 hour"
  ExpiresByType application/atom+xml      "access plus 1 hour"

# Favicon (cannot be renamed)
  ExpiresByType image/x-icon              "access plus 1 week"

# Media: images, video, audio
  ExpiresByType image/gif                 "access plus 1 month"
  ExpiresByType image/png                 "access plus 1 month"
  ExpiresByType image/jpeg                "access plus 1 month"
  ExpiresByType video/ogg                 "access plus 1 month"
  ExpiresByType audio/ogg                 "access plus 1 month"
  ExpiresByType video/mp4                 "access plus 1 month"
  ExpiresByType video/webm                "access plus 1 month"

# HTC files  (css3pie)
  ExpiresByType text/x-component          "access plus 1 month"

# Webfonts
  ExpiresByType application/x-font-ttf    "access plus 1 month"
  ExpiresByType font/opentype             "access plus 1 month"
  ExpiresByType application/x-font-woff   "access plus 1 month"
  ExpiresByType image/svg+xml             "access plus 1 month"
  ExpiresByType application/vnd.ms-fontobject "access plus 1 month"

# CSS and JavaScript
  ExpiresByType text/css                  "access plus 1 year"
  ExpiresByType application/javascript    "access plus 1 year"

</IfModule>


# ----------------------------------------------------------------------
# Prevent mobile network providers from modifying your site
# ----------------------------------------------------------------------

# The following header prevents modification of your code over 3G on some
# European providers.
# This is the official 'bypass' suggested by O2 in the UK.

# <IfModule mod_headers.c>
# Header set Cache-Control "no-transform"
# </IfModule>


# ----------------------------------------------------------------------
# ETag removal
# ----------------------------------------------------------------------

# FileETag None is not enough for every server.
<IfModule mod_headers.c>
  Header unset ETag
</IfModule>

# Since we're sending far-future expires, we don't need ETags for
# static content.
#   developer.yahoo.com/performance/rules.html#etags
FileETag None



# ----------------------------------------------------------------------
# Set Keep-Alive Header
# ----------------------------------------------------------------------

# Keep-Alive allows the server to send multiple requests through one
# TCP-connection. Be aware of possible disadvantages of this setting. Turn on
# if you serve a lot of static content.

<IfModule mod_headers.c>
   Header set Connection Keep-Alive
</IfModule>

# ----------------------------------------------------------------------
# UTF-8 encoding
# ----------------------------------------------------------------------

# Use UTF-8 encoding for anything served text/plain or text/html
AddDefaultCharset utf-8

# Force UTF-8 for a number of file formats
AddCharset utf-8 .atom .css .js .json .rss .vtt .xml
EOT;

        
        
        file_put_contents('./.htaccess',$content.$content_next);
    }
    
 
?>
