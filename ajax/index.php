<!DOCTYPE html>
<html>
<head>
	<title>Ajax</title>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#inFile').change(function(e)
			{
				//alert($(this).val());

				// $.ajax( {
			 //      url: 'drop.php',
			 //      type: 'POST',
			 //      data: new FormData( this ),
			 //      processData: false,
			 //      contentType: false
			 //    });
			 //    e.preventDefault();

			 $('#drop').submit();

			});

			$('#drop').submit(function(e)
			{
			    //alert('a');
			    $.ajax( {
			      url: 'drop.php',
			      type: 'POST',
			      data: new FormData( this ),
			      processData: false,
			      contentType: false,
			    	success: good
				});

			    e.preventDefault();
			});

			function good(data)
			{
				$('.return').html(data);
			}
		});
	</script>
</head>
<body>
<form action="drop.php" id="drop" enctype="multipart/form-data">
    <input name="file" type="file" id="inFile" />
</form>
<div class="return"></div>
</body>
</html>