<?php
	//namespace PHP7;

	require_once("namespace.php");

	use PHP7\classes\Page;
	use PHP7\functions;

	$page = new Page("1", "2");

	functions\debug($page);

	//$page = new Page("1", "2");