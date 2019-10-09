<?php
	spl_autoload_register(function($classname)
	{
		require_once __DIR__ . '/' . $classname . '.php';
	});


	class Strategy 
	{
		private $strategy;

		function __construct(Page $strategy)
		{
			$this->strategy = $strategy;
		}

		public function getFile($file)
		{
			return $this->strategy->newFile($file);
		}
	}

	$pdf = new Strategy(new Pdf);

	echo $pdf->getFile('index');