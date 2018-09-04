<?php 
 session_start();
 if(!$_SESSION['uname'])
	{
		
		header('Location: login.php');

	}
?>
<html>
	<head>
		<title>practice</title>
		<link href="updatepro.css" rel="stylesheet">
		<style>
	input[type=checkbox]{
		width: 25px;
		height: 25px;
	}
			input[type=checkbox] + div{
  			display: block;
} 
input[type=checkbox]:checked + div {
  display: none;
} 
		</style>
	</head>
	<body>
		<div class="top"><p>Time Table</p><form method="post" style="display: inline;float: right;margin-right: 20px;"><button name="logout" id="logout">Logout</button></form></div>
		<label for="ossm"><span class="unch">Uncheck</span> to enter the details</label>
		<input type="checkbox" id="ossm" name="ossm" checked="checked"> 
		<div for="ossm" class="dis">
			<form method="post" class="f1">
				<select id="continent" onchange="facuChange(this);" name="n1">
    				<option value="empty">Select a Department</option>
    				<option value="Information Technology">Information Technology</option>
    				<option value="Computer Science and Engineering">Computer Science and Engineering</option>
    				<option value="Mechanical Engineering">Mechanical Engineering</option>
    				<option value="Civil Engineering">Civil Engineering</option>
  				</select>
  				<select id="facu" name="n2">
    				<option value="0">Select a Faculty Name</option>
  				</select>
  				<input type="date" required="required">
  				<button name="details1" id="details1" >Show details</button>
			</form>
		</div> 
<script type="text/javascript"> 
 var facuLists = new Array(4) 
 facuLists["empty"] = ["Select a facu"]; 
 facuLists["Information Technology"] = ["Uma Mahesh", "Basha", "Basheer","Trilok Reddy"]; 
 facuLists["Computer Science and Engineering"] = ["Ravi", "Naveen", "Durga", "Amar"]; 
 facuLists["Mechanical Engineering"] = ["Mahesh", "Sasi", "Rohan"]; 
 facuLists["Civil Engineering"]= ["Manasa", "Harish", "Harika", "Gopi"]; 
 function facuChange(selectObj) { 
 var idx = selectObj.selectedIndex; 
 var which = selectObj.options[idx].value;  
 cList = facuLists[which]; 
 var cSelect = document.getElementById("facu");  
 var len=cSelect.options.length; 
 while (cSelect.options.length > 0) { 
 cSelect.remove(0); 
 } 
 var newOption; 
 for (var i=0; i<cList.length; i++) { 
 newOption = document.createElement("option"); 
 newOption.value = cList[i]; 
 newOption.text=cList[i]; 
 try { 
 cSelect.add(newOption);
 } 
 catch (e) { 
 cSelect.appendChild(newOption); 
 } 
 } 
 } 
</script>
	</body>
</html>
<?php
	if(isset($_POST['logout']))
	{
		
		header('Location: logout.php');

	}
	if(isset($_POST['details1']))
	{
		$fn=$_POST['n2'];
		$con=new mysqli("localhost","root","","projectstore");
		$sql="SELECT * FROM details WHERE name='$fn'";
		$result=$con->query($sql);
		echo "<br><table border=1 style='border-collapse:collapse;background:#fff7e6;border-radius: 6px;display:flex;justify-content:center;padding:25px;'><tr><td style='background:#fff;border-radius: 6px;color:#df41f4;font-size:25px;padding:25px;text-align:center;'>Name of Faculty</td><td style='background:#fff;border-radius: 6px;color:#df41f4;font-size:25px;padding:25px;text-align:center;'>Branch</td><td style='background:#fff;border-radius: 6px;color:#df41f4;font-size:25px;padding:25px;text-align:center;'>Year</td><td style='background:#fff;border-radius: 6px;color:#df41f4;font-size:25px;padding:25px;text-align:center;'>Section</td><td style='background:#fff;border-radius: 6px;color:#df41f4;font-size:25px;padding:25px;text-align:center;'>Course</td><td style='background:#fff;border-radius: 6px;color:#df41f4;font-size:25px;padding:25px;text-align:center;'>Post Attendence<td></tr>";
		while($row=$result->fetch_row()){
		echo "<tr><td style='background:#fff;border-radius: 6px;color:teal;font-size:20px;padding:25px;text-align:center;font-style:italic;font-weight:bold;'>"."$row[0]"."</td><td style='background:#fff;border-radius: 6px;color:teal;font-size:20px;padding:25px;text-align:center;'>"."$row[1]"."</td><td style='background:#fff;border-radius: 6px;color:teal;font-size:20px;padding:25px;text-align:center;'>"."$row[2]"."</td><td style='background:#fff;border-radius: 6px;color:teal;font-size:20px;padding:25px;text-align:center;'>"."$row[3]"."</td><td style='background:#fff;border-radius: 6px;color:teal;font-size:20px;padding:25px;text-align:center;'>"."$row[4]"."</td><td style='background:#fff;border-radius: 6px;color:teal;font-size:20px;padding:25px;text-align:center;'><a href='a.html'>Post Attendence</a></td></tr>";
		}
		echo "</table>";
	}
?>
