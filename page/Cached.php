<?php
	namespace PHP7;
	
	require_once("Page.php");

	class Cached extends Page
	{
		protected $expires; //Время действия кеша
		protected $store; //Хранилище

		public function __construct($title = "", $content = "", $expires = 0)
		{
			parent::__construct($title, $content);

			$this->expires = $expires;

			//Подготовка хранилища
			//$this->store = new Memcached();
			//$this->store->addServer('localhost', 11211);
			//Размещение данных в хранилище

			$this->set($this->id('title'), $title);
			$this->set($this->id('content'), $content);
		}

		protected function isCached($key)
		{
			//return (bool) $this->store->get($key);
		}

		protected function set($key, $value, $force = false)
		{
			//if($force) {
			//	$this->store->set($key, $value, $this->expires);
			//} else {
			//	if($this->isCached($key)) {
			//		$this->store->set($key, $value, $this->expires);
			//	}
			//}
		}

		protected function get($key)
		{
			//return $this->store->get($key);
		}

		public function id($name)
		{
			die("Что здесь делать? Неизвестно!");
		}

		public function title()
		{
			//if($this->isCached($this->id("title"))) {
			//	return $this->get($this->id("title"));
			//} else {
			//	return parent::title();
			//}
		}

		public function content()
		{
			//if($this->isCached($this->id("content"))) {
			//	return $this->get($this->id("content"));
			//} else {
			//	return parent::content();
			//}
		}
	}