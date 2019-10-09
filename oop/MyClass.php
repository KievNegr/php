<?php

Trait MyClass {
	public function get()
	{
		echo 'GET:: ' . __TRAIT__;
	}

	public function show()
	{
		echo 'show::' . __TRAIT__;
	}
}