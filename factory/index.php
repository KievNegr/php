<?php
	spl_autoload_register(function($classname)
	{
		require_once __DIR__ . '/' . $classname . '.php';
	});


	$factory = new Factory;
	$res = $factory->getPage('tewxt');
	$res->create();