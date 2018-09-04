<?php
	$fn=$_POST['n1'];
		$con=new mysqli("localhost","root","","projectstore");
		$sql="SELECT * FROM details WHERE name='$fn'";
		$result=$con->query($sql);
		$row=$result->fetch_row();
		echo "<table><tr><td>"."$row[3]"."</td><td>"."$row[0]"."</td><td>"."$row[1]"."</td><td>"."$row[2]"."</td></tr><table>";
?>