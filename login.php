<?php 
 session_start();
?>
<html>
<head>
<title>Login page</title>
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
.btn-register{
	border: 1px solid #ccc;
	padding:15px;
}


</style>
</head>
<body>
	<div class="login-form">
		<form action="login.php" method="post">
			<input type="text" name="t1" placeholder="username" onfocus="this.placeholder = ''"
				onblur="this.placeholder = 'username'"><br>
			<input type="password" name="t2" placeholder="password" onfocus="this.placeholder = ''"
				onblur="this.placeholder = 'password'"><br>
			<input type="submit" value="submit" name="submit" class="btn-submit">
			<button class="btn-register" name="newid">not registered yet? Sign In!!!!</button>
		</form>
	</div>
</body>
</html>
<?php
	if(isset($_POST['submit']))
	{
		$fn=$_POST['t1'];
		$ln=$_POST['t2'];
		$con=new mysqli("localhost","root","","projectstore");
		$sql="SELECT * FROM register WHERE uname='$fn'";
		$result=$con->query($sql);
		$count=$result->num_rows;
		if($count==1){
			$row=$result->fetch_assoc();
			if ($ln == $row['pwd']){
				$_SESSION['uname']=$fn;
				header('Location: proindex.php');
				return true;
			}
			else {
				echo "<script>alert('Check username and password');</script>";
				return false;
			}
		}
		else{
			echo "<script>alert('enter valid username');</script>";
			return false;
		}
	}
	if(isset($_POST['newid']))
	{
		
		header('Location: register.php');

	}
?>
	