<?php
	include('config.php');

	if ($_POST['apiKey'] != $config['ApiKey']) {
		header('HTTP/1.0 403 Forbidden');
		$result = array('status' => 'failed',
     	                 'reason' => 'Invalid credential');	
		echo json_encode($result); 
	}
	else {

		$title = $_POST['title'];
		$content = $_POST['content'];
		
		$has_date = false;
		$has_title = false;
		
		$content_lines = explode("\n",$content);
		foreach ($content_lines as $line) {
		    if ((stripos($line, "Date:", 0) === 0))
		        $has_date = true;
		    if ((stripos($line, "Title:", 0) === 0))
		        $has_title = true;
		}

		if ($_POST['type'] == 'page')
			$type = 'pages';
		else
			$type = 'blog';

		if ($has_date === false) & ($type == 'blog')
		    $content = "Date: ".strftime($config['DateFormat'])."\n" . $content;
		if ($has_title === false)
		    $content = "Title: ".$title."\n" . $content;		

		$path = './datas/' . $type . '/' . $title . '.md';
		/*if (file_exists($path) ===  True) {
			header('HTTP/1.0 401 File already exists');
		    $result = array('status' => 'failed',
         	                 'reason' => 'File already exists')		;
		    echo json_encode($result); 
		}
		else {*/
        file_put_contents($path, $content);
	    $result = array('status' => 'success');
	    echo json_encode($result); 
		//}
	}
?>       