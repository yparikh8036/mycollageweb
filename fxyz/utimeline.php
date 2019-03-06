<?php 



$con=mysqli_connect("localhost","root","","wtdb");

if(isset($_POST['submit'])){

	$tname=$_POST['tname'];
	$tblog=$_POST['tblog'];


	$sql="insert into tdata(tname,tblog) values('$tname','$tblog')";

	mysqli_query($con,$sql);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>blog</title>

</head>
<body>
<form method="post" >
	<div style="font-family: Helvetica;font-weight: bold;font-size: 20px;"> Teacher name:<input type="text" name="tname"></div>
	<br><br>
	<div style="font-family: Helvetica;font-weight: bold;font-size: 20px;">Enter Message Here:</div>
	<textarea rows="5" cols="40" name="tblog"></textarea><br><br>
	<!-- <div style="font-family: Helvetica;font-weight: bold;font-size: 20px;">Date :<input type="date" ></div><br><br>-->
	 <button type="submit" name="submit"><b style="font-family: Helvetica;font-size: 17px;">Submit</b></button>
</form>
<br>
<br>

<?php include("timeline.php");?>

</body>
</html>










