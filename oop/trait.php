<?php

trait Title {

	public function getTitle()
	{
		echo 'Title::title';
	}
}

trait Book {

	public function getTitle()
	{
		echo 'Book::title';
	}
}

class Page {
	use Title, Book
	{
		Title::getTitle as list;
		Book::getTitle insteadof Title;
	}
}

$obj = new Page;
$obj->list();
$obj->getTitle();