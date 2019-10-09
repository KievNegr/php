<?php

$db = new MySqli('localhost', 'admin', 'orkgb4', 'pizza');

$db->set_charset('UTF8');

$query = "SELECT `orders`.*, `orderlist`.*, `goods`.* FROM `orders` LEFT JOIN `orderlist` ON `orders`.`id` = `orderlist`.`id_order` LEFT JOIN `goods` ON `orderlist`.`id_product` = `goods`.`id`";

$result = $db->query($query);
echo '<pre>';
while($row = $result->fetch_array(MYSQLI_ASSOC))
{
	print_r($row);
}
?>