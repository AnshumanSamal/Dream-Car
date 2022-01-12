<!DOCTYPE html>
<html>
<head>
	<title>List of Service</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			font-family: monospace;
			font-size: 25px;
			text-align: left;
		}
		th{
			background-color: #d96459;
			color: white;
		}
		tr:nth-child(even){
			background-color: #f2f2f2;
		}

	</style>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Model</th>
			<th>Company</th>
			<th>Service</th>
		</tr>
		<?php
		$conn = mysqli_connect("localhost","root","","car");
		if ($conn-> connect_error){
			die("Connction failed". $conn-> connect_error);
		}
		$result = mysqli_query($conn,"select * from ser_detail");
		$rows= mysqli_num_rows($result);
			for($row=1;$row<=$rows;$row++){
				$rowv=mysqli_fetch_array($result,MYSQLI_BOTH);
	echo "<tr><td>".$rowv['Firstname']."</td>";
	echo "<td>".$rowv['Model']."</td>";
	echo "<td>".$rowv['Company']."</td>";
	echo "<td>".$rowv['Service']."</td></tr>";
}

	
			echo "</table>";
		$conn-> close();
		?>


	</table>

</body>
</html>