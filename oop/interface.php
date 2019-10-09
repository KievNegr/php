<?php

Interface Title {
	public function setTitle();
}

class Page implements Title {
	
	private $title;

	function __construct($getTitle)
	{
		$this->title = $getTitle;
		self::setTitle();
	}

	public function setTitle()
	{
		$this->title .= ' ' . time();
	}

	public function getTitle()
	{
		echo $this->title;
	}
}

$obj = new Page('Headline');
$obj->getTitle();