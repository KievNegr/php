<?php
	require_once("Cached.php");

	class News extends Cached
	{
		public function __construct($id)
		{
			if($this->isCached($this->id($id))) {
				parent::__construct($this->title(), $this->content());
			} else {
				// Данные пока не кэшированы, извлекаем
				// содержимое из базы данных
				// $query = "SELECT * FROM news WHERE id = :id LIMIT 1"
				// $sth = $dbh->prepare($query);
				// $sth = $dbh->execute($query, [$id]);
				// $page = $sth->fetch(PDO::FETCH_ASSOC);
				// parent::__construct($page['title'], $page['title']);
				parent::__construct("News","News text");
			}
		}

		public function id($name)
		{
			return "News_{" . $id . "}";
		}
	}