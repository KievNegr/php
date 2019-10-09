<pre>
<?php

	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет'];
	echo 'Исходный массив<br>';
	print_r($arr);

	echo 'asort сортировка по значениям 0 -> 1<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет'];
	asort($arr);
	print_r($arr);

	echo 'arsort сортировка по значениям 1 -> 0<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет'];
	arsort($arr);
	print_r($arr);

	echo 'ksort сортировка по ключам 0 -> 1<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет'];
	ksort($arr);
	print_r($arr);

	echo 'krsort сортировка по ключам 1 -> 0<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет'];
	krsort($arr);
	print_r($arr);

	echo 'asort сортировка по значениям многомерный массив (Сортируется только верхний уровень) 0 -> 1<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => ['hello', 'Ciao']];
	asort($arr);
	print_r($arr);

	echo 'array_reverse переворот массива<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет'];
	$arr = array_reverse($arr);
	print_r($arr);

	echo 'natsort естественная сортировка<br>';
	$arr = ['d' => 'Some value1', 'a' => 'Some value2', 'e' => 'Some value10', 'f' => 'Some value05'];
	natsort($arr);
	print_r($arr);

	echo 'sort сортировка списка 0 -> 1<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет'];
	sort($arr);
	print_r($arr);

	echo 'sort сортировка списка 1 -> 0<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет'];
	rsort($arr);
	print_r($arr);

	echo 'suffle перемешка<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => ['hello', 'Ciao']];
	print_r($arr);
	shuffle($arr);
	print_r($arr);

	echo 'array_flip перестановка ключ -> значение<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет', 'r' => 'Some text'];
	print_r($arr);
	$arr1 = array_flip($arr);
	print_r($arr1);

	echo 'array_keys<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет', 'r' => 'Some text'];
	print_r(array_keys($arr));

	echo 'array_values<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет', 'r' => 'Some text'];
	print_r(array_values($arr));

	echo 'in_array (what, array)<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет', 'r' => 'Some text'];
	print_r($arr);
	if(in_array('Some value', $arr)) echo 'Some value тут есть<br>';

	echo 'array_count_values<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет', 'r' => 'Some text'];
	print_r($arr);
	print_r(array_count_values($arr));

	echo 'array_merge слияние<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет', 'r' => 'Some text'];
	print_r($arr);
	$arr2 = ['g' => 'Some value', 'c' => 'Another value', 'f' => 'Some text', 'q' => 'Привет', 'w' => 'Some text'];
	print_r($arr2);
	$arr3 = array_merge($arr, $arr2);
	print_r($arr3);

	echo 'array_slice аналог substr для строк<br>';
	$arr = ['d' => 'Some value', 'a' => 'Another value', 'e' => 'Some text', 'f' => 'Привет', 'r' => 'Some text'];
	print_r($arr);
	$arr2 = array_slice($arr, -3, 2);
	print_r($arr2);