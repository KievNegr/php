<?php
	class Text implements Page {
		public function newFile($file)
		{
			return 'This is a new ' . $file . '.txt<br>';
		}
	}