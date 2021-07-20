<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	
		body{
			background: lightgrey;
		}

		.main{
			width: 30%;
			height: auto;
			text-align: center;
			border-radius: 20px;
			background-color: white;
			margin: auto;
			padding: 70px;
			}	


		    /* The animation code */
@keyframes example {
  0%   {background-color: red;}
  10%  {background-color: yellow;}
  20%  {background-color: blue;}
  30% {background-color: green;}
  40% {background-color: purple;}
  50% {background-color: maroon;}
  60% {background-color: orange;}
  70% {background-color: magenta;}
  80% {background-color: gold;}
  90% {background-color: olive;}
  100% {background-color: cyan;}
}

/* The element to apply the animation to */
.animation {
	width: 39%;
	margin: auto;
	border-radius: 10px;
	text-align: center;
  background-color: red;
  animation-name: example;
  animation-duration: 7s;
}


		  .input-container {
                    display: flex;
                    width: 100%;
                    margin-bottom: 10px;
                  }

                  .icon {
                    padding: 5px;
                    background: lightgrey;
                    min-width: 40px;
                    text-align: center;
                  }

		   .len {
  				width: 100%;
  				padding: 10px;
  				outline: none;
				}

				.list{
					text-decoration: none;
					margin-left: 300px;
					 margin-top: 50px;
				}

			.button{
				font-size: 20px;
				width: 60%;
				height: 30px;
				background-color: lightblue;
				border-radius: 7px;
				margin-top: 30px;
				margin-right: 10px;
				}

		.button:hover {
    		background: blue;
		}

	</style>

</head>
<body>
	<h1 class="animation">REGISTRATION FORM</h1>
	
	<div class="main">
	<center>

	<form method="POST">
	<h3>
		
		<div class="input-container">
    	<i class="fa fa-user icon"></i>
		<input class="len" type="text" name="firstName" placeholder="First Name" required><br><br>
		</div>

		<div class="input-container">
    	<i class="fa fa-user icon"></i>
		<input class="len" type="text" name="middleName" placeholder="Middle Name"><br><br>
		</div>

		<div class="input-container">
    	<i class="fa fa-user icon"></i>
		<input class="len" type="text" name="lastName" placeholder="Last Name" required><br><br>
		</div>

		<div class="input-container">
		<i class="fa fa-mobile icon" aria-hidden="true"></i>
		<input class="len" type="text" name="mobile" placeholder="Mobile no." required><br><br>
		</div>

		<div class="input-container">
		<i class="far fa-building icon"></i>
		<input class="len" type="text" name="branch" placeholder="Branch" required><br><br>
		</div>

		<div class="input-container">
		<i class="fa fa-user icon"></i>
		<input class="len" type="text" name="age" placeholder="Age" required><br><br>
		</div>

		<div class="input-container">
		<i class="fa fa-user icon"></i>
		<input class="len" type="text" name="gender" placeholder="Gender" required><br><br>
		</div>

		<input class="button" type="submit" name="submit" value="Register">

		<div class="list"><button><a href="display.php">view list</a></button></div>
	</h3>
	</form>
	</center>
	</div>
</body>
</html>

<?php
	
	include 'connection.php';

	if(isset($_POST['submit']))
	{
		$first = $_POST['firstName'];
		$middle = $_POST['middleName'];
		$last = $_POST['lastName'];
		$mobile = $_POST['mobile'];
		$branch = $_POST['branch'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];

		$insertquery = "INSERT INTO registered (firstName, middleName, lastName, mobileNo, branch, age, gender) VALUES('$first','$middle','$last', '$mobile','$branch','$age','$gender')";


		$res = mysqli_query($con, $insertquery);

		if ($res) 
		{
			?>
			<script>
				alert("You have successfully Register");
			</script>

			<?php
		}
		else
		{
			?>
			<script>
				alert("Please check your connection");
			</script>
			<?php
		}
	}
?>
