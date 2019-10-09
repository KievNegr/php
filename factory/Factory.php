<?php
	class Factory {
		public function getPage($type)
		{
			switch($type){
				case 'pdf': return new Pdf;
				case 'txt': return new Text;
				default: throw new Exception("Error type");
			}
		}
	}