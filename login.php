<!DOCTYPE html>
<html>
<head>
	<title>Sign In Page</title>

	<style type="text/css">
		
		body{
			background:url("aa.jpg");
			background-size: cover;
		}
		h1{
			text-align: center;
			font-size: 60px;
			color: #00bacd;
			font-style: bold;
		}
		.form{
			width: 320px;
			height: 420px;
			background: #4041439e;
			color: #fff;
			top: 50%;
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
		.form h2{
			text-align: center;
		}
		.form label{
			margin: 0px;
			padding: 0px;
			font-weight: bold;
		}
		.form input{
			width: 99%;
			height: 40px;
			margin-bottom: 30px;

		}
		.form input[type="email"], input[type="password"]{
			background: transparent;
			border:none;
			border-bottom: 1px solid #fff;
			color:#fff;
			font-size: 16px;
		}
		.form input[type="submit"]{
			border: 0px;
			outline: 0px;
			background-color:#142a3fba;
			color: #fff;
			border-radius: 20px;
			font-size: 18px;
			margin-bottom: 20px;
		}
		.form input[type="submit"]: hover{
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
	
	<h1>E-Janala Standard School</h1>

	<div class="form">
		
		<img src="sign.jpg" class="sign">
		<form  action="login.php" method="POST">
			<h2>Log-In Here</h2>
			<label>Email</label><br>
			<input type="email" name="email">
			<label>Password</label><br>
			<input type="Password" name="Pass"><br>
			<input type="submit" name="submit" value="Login"><br>
			<p class="massage">Don't have an account? <a href="reg.php">Register</a></p>
		</form>
	</div>
</body>
</html>