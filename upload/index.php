<?php
	if(@$_REQUEST['doUpload'])
	{
		echo '<pre>';
		print_r($_FILES);
		echo '</pre>';
		copy($_FILES['myFile']['tmp_name'], 'upload/' . $_FILES['myFile']['name']);
	}
?>
<!DOCTYPE html>
<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(function()
		{
			$(document).on('click', "input[type='button'][value!='+']", removeField);
			$(document).on('click', "input[type='button'][value!='-']", addField);
		});

		function addField()
		{
			$("p:last").clone().insertAfter("p:last");
		}

		function removeField()
		{
			console.log($(this));
			$("p:last").remove();
		}
	</script>
</head>
<body>
	<form action="<?php echo $_SERVER['SCRIPT_NAME'];?>" method="post" enctype="multipart/form-data">
		<p>
			<input type="file" name="myFile[]" />
			<input type="button" value="+" />
			<input type="button" value="-" />
		</p>
		<input type="submit" name="doUpload" value="Send" />
	</form>
</body>