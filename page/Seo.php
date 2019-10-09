<?php
	namespace PHP7;
	
	trait Seo 
	{
		private $keywords;
		private $description;

		public function keywords()
		{
			echo "SEO::Keywords<br />";
		}

		public function description()
		{
			echo "SEO::Description<br />";
		}
	}