


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><?php
	if (!isset($_REQUEST['t4'])) 
	{
		?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" name="f1" style="font-family: Helvetica;font-weight: bold;font-size: 20px;">
	 <!-- Enter week :<input type="text" name="t1"><br>  -->
	<!-- Enter Faculty :<input type="text" name="t2"><br> -->
	Enter Student Id :<input type="text" name="t3">
    <input type="submit" name="t4">
</form>

<?php
}
else
{
//$wk=$_REQUEST['t1'];
//$f=$_REQUEST['t2'];
$sid=$_REQUEST['t3'];


$link = mysqli_connect("localhost","root","","wtpro");
$str="select * from att where sid='$sid'";
						$res=$link->query($str);
						 echo"<h1>Attandance</h1>";
						 	
							while ($row=mysqli_fetch_row($res)) {
						echo "<table border='5' class='abc'>";
                        echo "<tr><td>Week :</td><td>" .$row[0]."</td></tr>";
						echo "<tr><td>Student Id :</td><td>" .$row[1]."</td></tr>";
						echo "<tr><td>FA1 :</td><td>" .$row[2]."</td></tr>";
						echo "<tr><td>FA2 :</td><td>" .$row[3]."</td></tr>";
						echo "<tr><td>FA3 :</td><td>" .$row[4]."</td></tr>";	
                        echo "</table>";
                        }	
                    }

?>
</body>
</html>