<?php

include_once('./config.php');

class RSSFeed {
    // VARIABLES
    // channel vars
    var $channel_url;
    var $channel_title;
    var $channel_description;
    var $channel_lang;
    var $channel_copyright;
    var $channel_date;
    var $channel_creator;
    var $channel_subject;   
    // image
    var $image_url;
    // items
    var $items = array();
    var $nritems;
    
    // FUNCTIONS
    // constructor
    function RSSFeed() {
         $this->nritems=0;
        $this->channel_url='';
        $this->channel_title='';
        $this->channel_description='';
        $this->channel_lang='';
        $this->channel_copyright='';
        $this->channel_date='';
        $this->channel_creator='';
        $this->channel_subject='';
        $this->image_url='';
    }   
    // set channel vars
    function SetChannel($url, $title, $description, $lang, $copyright, $creator, $subject) {
        $this->channel_url=$url;
        $this->channel_title=$title;
        $this->channel_description=$description;
        $this->channel_lang=$lang;
        $this->channel_copyright=$copyright;
        $this->channel_date=date("Y-m-d").'T'.date("H:i:s").'+01:00';
        $this->channel_creator=$creator;
        $this->channel_subject=$subject;
    }
    // set image
    function SetImage($url) {
        $this->image_url=$url;  
    }
    // set item
    function SetItem($url, $title, $description, $date) {
        $this->items[$this->nritems]['url']=$url;
        $this->items[$this->nritems]['title']=$title;
        $this->items[$this->nritems]['description']=$description;
        $this->items[$this->nritems]['date']=$date;
        $this->nritems++;   
    }
    // output feed
    function Output() {
        $output =  '<?xml version="1.0" encoding="utf-8"?>'."\n";
        $output .= '<rss version="2.0"><channel>';
        $output .= '<title>'.$this->channel_title.'</title>';
        $output .= '<link>'.$this->channel_url.'</link>';
        $output .= '<description>'.$this->channel_description.'</description>';
        $output .= '<language>'.$this->channel_lang.'</language>';


        //$output .= '</channel>'."\n";
        for($k=0; $k<$this->nritems; $k++) {
            $output .= '<item>';
            $output .= '<title>'.$this->items[$k]['title'].'</title>';
            $output .= '<pubDate><![CDATA['.$this->items[$k]['date'].']]></pubDate>';
            $output .= '<link>'.$this->channel_url.$this->items[$k]['url'].'</link>';
            $output .= '<guid>'.$this->channel_url.$this->items[$k]['url'].'</guid>';
            $output .= '<description><![CDATA['.$this->items[$k]['description'].']]></description>';
            $output .= '</item>';  
        };
        $output .= '</channel></rss>';
        return $output;
    }
};
    function Kht_ExtractTags($content) {
        $content_lines = explode("\n",$content);
        foreach ($content_lines as $line) {
            if (substr($line, 0, 6) === ':tags ') {
                return substr($line,6);
                }
        }
        return '';
      }
  
    function Kht_ExtractDate($content) {
        $content_lines = explode("\n",$content);
        foreach ($content_lines as $line) {
            if (substr($line, 0, 6) == ':date ') {            
                return strtotime(substr($line,6));            
                }
        }
        return 0;
      }
      
    function Kht_ReadDir($dir, $array = array()){
        $dh = opendir($dir);
        $files = array();
        while (($file = readdir($dh)) !== false) {
            $flag = false;
            if($file !== '.' && $file !== '..' && !in_array($file, $array) && ($file != ".DS_Store") && (strpos($file, "~") == 0)) {
                $files[$file] = Kht_ExtractDate(file_get_contents($dir.$file));
            }
        }
        arsort($files);
        return $files;
    }
    
    function Kht_GetLastBlogPosts($limit=5) {
        $Kht_Content = array();

        include_once('libs/markdown.php');
        $path = './datas/blog/';
        $dir_contents = Kht_ReadDir($path);
        if ($limit>0)
            $dir_contents = array_slice($dir_contents,0,$limit );
        foreach ($dir_contents as $dir_content => $content_date) {        
            
            $post = array();
            $fcontent = file_get_contents($path.$dir_content);
            if ($fcontent) {
                $ccontent = '';
                $content_lines = explode("\n",$fcontent);
                foreach ($content_lines as $line) {
                    if (substr($line, 0, 1) !== ':') 
                        {$ccontent.=$line."\n";}
                }
                $post['data'] = Markdown($ccontent);
                $post['date'] = $content_date;
                $post['tags'] = Kht_ExtractTags($fcontent);
                $post['link'] = '/blog/'.htmlentities(pathinfo($dir_content, PATHINFO_FILENAME));
                $post['title'] = pathinfo($dir_content, PATHINFO_FILENAME);
                $Kht_Content[] = $post;
            }        
        }
        return $Kht_Content;
    }

header('Content-type: text/xml');

$myfeed = new RSSFeed();
$myfeed->SetChannel('http://khertan.net/',
          $config['Name'].' RSS',
          $config['Name'].' News',
          $config['Lang'],
          $config['Licence'],
          $config['Author'],
          $config['Description']);
$myfeed->SetImage('http://khertan.net/layout/logo.jpg');

include_once('./libs/markdown.php');

$content = '';
$path = './datas/blog/';

$posts = Kht_GetLastBlogPosts(5);
foreach ($posts as $post) {
    $myfeed->SetItem($post['link'],$post['title'],$post['data'],strftime('%A %d %B %Y', $post['date']));
}                       

echo $myfeed->output();

?>
