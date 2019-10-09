<?php
	//namespace PHP7;
	$a = set_error_handler("myErrorHandler");

	//require_once(__DIR__ . "/autoload.php");

	spl_autoload_register();

	$id = 3;
	$page = new StaticPage($id);
	$page->render();
	$page->keywords();
	$page->description();
	$page->tags();
	echo $a;
	echo __DIR__;

	function myErrorHandler($errno, $errstr, $errfile, $errline)
	{
		echo "$errno, $errstr, $errfile, $errline - чини блять!";
	}

