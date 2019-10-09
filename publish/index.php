<pre>
<?php
	$redis = new Redis;

	$redis->connect('127.0.0.1', 6379);

	$redis->publish('news', 'ddd');//json_encode( 'dicky', JSON_PRETTY_PRINT ));
?>
</pre>