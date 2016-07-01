<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Youtube Downloader</title>
    <meta name="keywords" content="Video downloader, download youtube, video download, youtube video, youtube downloader, download youtube FLV, download youtube MP4, download youtube 3GP, php video downloader" />
	  	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	  <link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
	<form class="form-download" method="get" id="download" action="getvideo.php">
		<h1 class="form-download-heading">Youtube Downloader</h1>
		<input type="text" name="videoid" id="videoid" size="40" placeholder="Video URL or ID" />
		<button class="btn btn-primary" name="type2" id="advanced">quick download</button>
		<input class="btn btn-primary" type="submit" name="type" id="type" value="advanced conversion"/>

    <!-- @TODO: Prepend the base URI -->
    <?PHP
    include_once('config.php');
    function is_chrome(){
    	$agent=$_SERVER['HTTP_USER_AGENT'];
    	if( preg_match("/like\sGecko\)\sChrome\//", $agent) ){	// if user agent is google chrome
        if(!strstr($agent, 'Iron')) // but not Iron
    	return true;
	    }
	    return false;	// if isn't chrome return false
    }
    if(($config['feature']['browserExtensions']==true)&&(is_chrome())) {
      echo '<a href="ytdl.user.js" class="userscript btn btn-mini" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a>';
    }
    ?>
  </form>
</body>
</html>
