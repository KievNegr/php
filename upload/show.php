<?php
	$list = opendir('upload');
	while($file = readdir($list))
	{
		if($file != '..' || $file != '.')
		{
			$time = filemtime($file);
			echo $file . ' ' . $time . '<br />';
		}
	}
?>