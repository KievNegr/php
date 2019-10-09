<?php
	namespace PHP7;

	require_once("Cached.php");

	class StaticPage extends Cached
	{
		use Seo, Tag;
		
		public function __construct($id)
		{
			if($this->isCached($this->id($id))) {
				parent::__construct($this->title(), $this->content());
			} else {
				// Данные пока не кэшированы, извлекаем
				// содержимое из базы данных
				// $query = "SELECT * FROM static_pages WHERE id = :id LIMIT 1"
				// $sth = $dbh->prepare($query);
				// $sth = $dbh->execute($query, [$id]);
				// $page = $sth->fetch(PDO::FETCH_ASSOC);
				// parent::__construct($page['title'], $page['title']);
				parent::__construct("Contatcs","Contacts text");
			}
		}

		public function id($id)
		{
			return "StaticPage_{" . $id . "}";
		}
	}

	/*
	class StaticPage extends Cached implements Seo
	{
		public function __construct($id)
		{
			if($this->isCached($this->id($id))) {
				parent::__construct($this->title(), $this->content());
			} else {
				// Данные пока не кэшированы, извлекаем
				// содержимое из базы данных
				// $query = "SELECT * FROM static_pages WHERE id = :id LIMIT 1"
				// $sth = $dbh->prepare($query);
				// $sth = $dbh->execute($query, [$id]);
				// $page = $sth->fetch(PDO::FETCH_ASSOC);
				// parent::__construct($page['title'], $page['title']);
				parent::__construct("Contatcs","Contacts text");
			}
		}

		public function id($id)
		{
			return "StaticPage_{" . $id . "}";
		}
	}*/