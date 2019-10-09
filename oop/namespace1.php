<?php

Trait MyArr {
	public function get($arr)
	{
		echo 'GET:: ' . __TRAIT__;
	}

	public function show()
	{
		echo 'show::' . __TRAIT__;
	}
}