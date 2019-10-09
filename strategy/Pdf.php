<?php
	class Pdf implements Page {
		public function newFile($file)
		{
			return 'This is a new ' . $file . '.pdf<br>';
		}
	}