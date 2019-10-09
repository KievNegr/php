<!DOCTYPE html>
<head>
	
</head>
<body>
	<?php
		if($_POST['sendButton'])
		{
			echo count($_FILES['image']);
			foreach ($_FILES['image']['name'] as $key => $file) {
				copy($_FILES['image']['tmp_name'][$key], $file);
			}
		}
	?>
	<form enctype="multipart/form-data" method="POST">
		<input type="file" name="image[]" multiple />
		<input type="submit" value="Send" name="sendButton" />
	</form>
</body>