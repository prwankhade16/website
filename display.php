
<!DOCTYPE html>
<html>
<head>
	<title>Registered student</title>

	<style>
		
		.dis{
			font-size: 20px;
			background-color: lightgrey;
			width: 70%;
			height: 100%;
			padding-right: 50px;
			margin-left: 210px;
		}

		 h1{
		 	width: 100%;
		 	height: 100%;
			text-align: center;
			color: purple;
			padding: 20px;
			margin: 10px;
		}	

		table, th, td {
			border: 1px solid blue;
		}

		td{
			text-align: center;
		}

		table {
			width: 100%;
			height: 100%;
		}

	</style>
</head>
<body>
	<div class="dis">
	<center>
	<h1>LIST OF STUDENTS</h1>
	<table>
		<thead>
			<tr>
				<th>sr. no.</th>
				<th>FirstName</th>
				<th>MiddleName</th>
				<th>LastName</th>
				<th>Mobile no.</th>
				<th>Branch</th>
				<th>Age</th>
				<th>Gender</th>
			</tr>
		</thead>

		<tbody>
			<?php
	
				include 'connection.php';

				$selectquery = "SELECT * FROM registered";

				$query = mysqli_query($con, $selectquery);

				while ($res = mysqli_fetch_array($query))
				{
					//echo $res['firstName'].'<br>';

				?>

					<tr>
						<td><?php echo $res['srNo'];?></td>
						<td><?php echo $res['firstName'];?></td>
						<td><?php echo $res['middleName'];?></td>
						<td><?php echo $res['lastName'];?></td>
						<td><?php echo $res['mobileNo'];?></td>
						<td><?php echo $res['branch'];?></td>
						<td><?php echo $res['age'];?></td>
						<td><?php echo $res['gender'];?></td>
					</tr>

					<?php 
				}

					?>

		</tbody>
	</table>
	</center>
	</div>
</body>
</html>