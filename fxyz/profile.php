<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		

.mytab
{
position:absolute;
top:05%;
left:00%;
/*margin-right: 150px;
margin-top: 100px;
*/
font-size: 25px;
font-family: Helvetica;
font-weight: bold;
}
	</style>
</head>
<body>

	<?php
		session_start();
		$connect=mysqli_connect("localhost","root","","wtpro");
		$tun=$_SESSION['user'];
		//$link = new mysqli("localhost","root","","wtpro");
		//$connect=mysqli_connect("localhost","root","","wtpro");
		//$res=$link->query("select * from members where una='$tun'");
		$query="select * from members where una='$tun'";
		$result=mysqli_query($connect,$query);
		$row= mysqli_fetch_assoc($result);

		 
		//while($row= mysqli_fetch_assoc($result))
		    ?>
			<div class='mytab'>
		    <table border='3' >
			<tr><td> First Name :</td><td> <?php echo "".ucfirst($row['fna']); ?> </td></tr>
			<tr><td> Last Name :</td><td>   <?php echo "".ucfirst($row['lna']);?></td></tr>
			<tr><td> User Name :</td><td>   <?php echo "".$row['una'];?> </td></tr>
			<tr><td> Position :</td><td>    <?php echo "".ucfirst($row['pos']);?> </td></tr>
			<tr><td> Moblie :</td><td>     <?php echo "".$row['mob']; ?> </td></tr>
			<tr><td> Email:</td><td>      <?php echo "".$row['email']; ?></td></tr>
		    </table>
</div>

</body>
</html>