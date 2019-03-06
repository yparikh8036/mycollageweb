
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		h1{
			position: relative;
			left: 45%;
			font-size: 40px;
			font-family: Helvetica;
			font-weight: bold;
		}
		.abc{
			position: relative;
			left: 00%;
			font-size: 28px;
			font-family: Helvetica;
			
		}
      .xyz{
			position: relative;
			left: 00%;
			font-size: 17px;
			font-family: Helvetica;
          }
</style>
</head>
<body>
	<?php
$con=mysqli_connect("localhost","root","","wtdb");

$sql="select * from tdata";

$res=mysqli_query($con,$sql);
?>
<h1>Timeline</h1><hr><hr>
<?php

while($result=mysqli_fetch_assoc($res)){  ?>
<table >
<tr><td><div class="abc"><b>Faculty Name :</b> <?php echo"".ucfirst($result['tname']); ?></div>
<div class="xyz"><b>Message : </b><?php echo"".ucfirst($result['tblog']); ?></div></td></tr>

</table>
<hr>
<?php
}
?>
</body>
</html>





