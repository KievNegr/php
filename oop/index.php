<?php

class Start {
	
	function __construct()
	{
		echo 'Start<br />';
	}

	public function get()
	{
		echo 'Get<br />';
	}
}

class My extends Start {

	function __construct()
	{
		parent::__construct();
	}

	public function getGet()
	{
		parent::get();
	}

	public function get()
	{
		echo 'MyGet<br />';
	}

	public function forSelf()
	{
		self::get();
	}
}

$obj = new My;
$obj->get();
$obj->getGet();
$obj->forSelf();