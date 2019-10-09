<?php
require_once('namespace1.php');
require_once('namespace2.php');

use PHP7\MyArr as Php;
use PHP7_1\MyArr as Php2;
//use \PHP\MyClass;


class Arrs 
{
	use Php, Php2
	{
		Php::get as phpGet;
		Php2::get insteadof Php;
	}

}
$arr1 = ['array', 'car', 'street'];
$arr2 = ['where', 'get', 'hello', 'annual', 'profit'];
$arr2 = ['There', 'is', 'coffe', 'on the', 'table'];

//$obj1 = new Php;
//$obj2 = new Php2;
//$obj3 = new MyClass;

//$obj1->get($arr1);
//$obj2->get($arr2);
//$obj3->get($arr3);

//echo __DIR__;

$obj = new Arrs;
$obj->show();
echo '<br />';
$obj->get();