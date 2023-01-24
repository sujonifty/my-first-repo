<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>

	<style type="text/css">
		
		body{
			background:url("a.jpg");
			background-size: cover;
		}
		h1{
			text-align: center;
			font-size: 60px;
			color: #00bacd;
			font-style: bold;
		}
		.form1{
			width: 320px;
			height: 560px;
			background: #0000009e;
			color: #fff;
			top: 55%;
			left: 50%;
			position: absolute;
			transform: translate(-50%, -50%);
			box-sizing: border-box;
			padding: 50px, 30px;
			border-radius: 5px;
		}
		.sign{
			width: 100px;
			height: 100px;
			position: absolute;
			top: -50%;
			left: calc(50, -50%);
			border-radius: 50%;
		}
		.form1 h2{
			text-align: center;
		}
		.form1 label{
			margin: 0px;
			padding: 0px;
			font-weight: bold;
		}
		.form1 input{
			width: 99%;
			height: 40px;
			margin-bottom: 30px;
		}
		.form1 input[type="text"],input[type="email"], input[type="password"]{
			background: transparent;
			border:none;
			border-bottom: 1px solid #fff;
			color:#fff;
			font-size: 16px;
		}
		.form1 input[type="submit"]{
			border: 0px;
			outline: 0px;
			background-color:#1d5e9bcc;
			color: #fff;
			border-radius: 20px;
			font-size: 18px;
			margin-bottom: 20px;
		}
		.form1 input[type="submit"]: hover{
			cursor: pointer;
			background: lightblue;
			color:blue;
		}

		form a{
			text-decoration: none;
			color: white;
			line-height: 20px;
			font-size: 16px;
		}

	</style>
</head>
<body>
	
	<h1>E-Janala Standard School</h1><br><br><br>

	<div class="form1">
		
		<img src="sign.jpg" class="sign">
		<form action="reg.php" method="POST">
			<h2>Sign-Up Here</h2>
			<label>User-Name</label><br>
			<input type="text" name="name">
			<label>Email</label><br>
			<input type="email" id="form"name="email">
			<label>Password</label><br>
			<input type="Password" name="pass"><br>
			<label>Confirm Password</label><br>
			<input type="Password" name="cpass"><br>
			<input type="submit" name="reg" value="Sign up"><br>
			

			<p class="massage">Already registered? <a href="login.php">Login</a></p>
		</form>

		<?php
	

		if (isset($_POST['reg'])) {
			$name =$_POST['name'];
			$email =$_POST['email'];
			$pass =$_POST['pass'];
			$cpass =$_POST['cpass'];

			if ($pass==$cpass) {
				$query="select*from        user where email='$email'";
				$query_check=mysqli_query($con,$query);
				if ($query_check) {
					if (mysqli_num_rows($query_check)>0) {
						echo "

						<script>
						alert('Email Already In Use');
						window.location.href='login.php';
						</script>

						";
					}
					else{
						$insertion="insert into user values('$name','$email','$pass')";
						$run=mysqli_query($con,$insertion);

						if ($run) {
						echo "

						<script>
						alert('You are successfully registered');
						window.location.href='home.php';
						</script>

						";
					}
					else {
						echo "

						<script>
						alert('Connection failed');
						window.location.href='reg.php';
						</script>

						";
					}
					
					}
				}
				else {
						echo "

						<script>
						alert('Database Error');
						window.location.href='reg.php';
						</script>

						";
					}
					

			}
			else {
						echo "

						<script>
						alert('Password & Confirm Password Doesn't match);
						window.location.href='reg.php';
						</script>

						";
					}




		}
		else{
		}


		?>

		

	</div>
</body>
</html>