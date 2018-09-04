<?php 
 session_start();
 session_destroy();
 ?>
<html>
<head>
	<title>Logout page</title>
	<link rel="stylesheet" href="style.css" />
	<style>
		p{
			font-size:40px;
			color:#777;
		}
		.btn-register{
			border: 1px solid #ccc;
			padding:15px;
		}
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
		<p>Thank you!!Visit Again</p>
		<form method="post">
			<button name="login" class="btn-register ">Login Again</button>
		</form>
	<div/>
</body>
</html>
<?php
	if(isset($_POST['login']))
	{
		
		header('Location: login.php');

	}
?>