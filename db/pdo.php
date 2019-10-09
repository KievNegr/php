<?php

$db = new PDO('mysql:host=localhost;dbname=pizza;charset=utf8', 'admin', 'orkgb4');

$query = "SELECT orders.*, orderlist.size, goods.title FROM orders LEFT JOIN orderlist ON orders.id = orderlist.id_order LEFT JOIN goods ON orderlist.id_product = goods.id";

$result = $db->query($query, PDO::FETCH_ASSOC);

echo '<pre>';
foreach($result as $row)
{
	print_r($row);
}