  <?php
	
	$username = 'root';
	$password = '';
	$server = 'localhost';
	$db = 'registration_form';

	$con = mysqli_connect($server, $username, $password, $db);

	if ($con) 
	{
		//echo "connection successful";
  ?>
	<script>
		//alert('connection successful');
	</script>
  <?php

	}
	else
	{
		echo "Not connected";
	}

  ?>