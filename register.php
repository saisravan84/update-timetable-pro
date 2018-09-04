<html>
<head>
	<title>Userdetails</title>
	<link rel="stylesheet" href="style.css" />
	<style>
	.login-form{
		text-align:center;
		background:#fff;
		margin:20px auto;
		width:60%;
		height:320px;
		padding-top:10px;
		box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
		border-radius:20px;
	}
	</style>
</head>
<body>
<div class="login-form">
	<form method="post" action="register.php">
	<input type="text" name="t3" placeholder="Username"onfocus="this.placeholder = ''"
				onblur="this.placeholder = 'Username'" required>
	<input type="email" name="t4" placeholder="Email"onfocus="this.placeholder = ''"
				onblur="this.placeholder = 'Email'" required>
	<input type="password" name="t5" placeholder="Password"onfocus="this.placeholder = ''"
				onblur="this.placeholder = 'Password'" pattern=".{8,15}" required title="must be between 8 to 10 characters">
	<input type="submit" name="submit" class="btn-register">
</form>
</div>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$un=$_POST['t3'];
		$e=$_POST['t4'];
		$p=$_POST['t5'];
		$con=new mysqli("localhost","root","","projectstore");
		$sql="Insert into register(uname,email,pwd) values('$un','$e','$p')";
		if($con->query($sql)===true)
		{
			header('Location: login.php');
		}
		else{
			echo "<script>alert('username already exists,try another one');</script>";
		}
	}
?>