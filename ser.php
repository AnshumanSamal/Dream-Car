<?php
$name = $_POST['fname'];
$model = $_POST['model'];
$company = $_POST['company'];
$service = $_POST['service'];
$con = mysqli_connect("localhost","root","");
if (!($con)) {
	die("error while connecting to the database");
}
else{
	print("Connection was successfull <br />");
}
$db = mysqli_select_db($con,"car");
$query ="create table ser_detail(Firstname char(20),Model char(20),Company char(20),Service varchar(20))";
mysqli_query($con,$query);
$query = "insert into ser_detail values('$name','$model','$company','$service')";
mysqli_query($con,$query);
$result = mysqli_query($con,"select * from ser_detail");
mysqli_close($con);
echo "<a href='http://localhost/mini6/serlist.php'>";
echo "<img src='ser.jpg'>";
echo "</a>";
?>