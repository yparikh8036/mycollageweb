<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function show(a)
		{
			var e=document.getElementById("abc");
			e.innerHTML="<object type='text/html' data="+a+" width='1368px' height='600px'>";
		}
	</script>
	<style type="text/css">
		.mydes
		{
			font-size: 25pt;
			border-color: white;
			cursor:pointer;
		}
	</style>
</head>
<body style="background-image:url('education.jpg'); background-size: cover;">

<div style="position: absolute;top: 0;left: 0;width: 1368px;height: 150px;background-color: #14a289;">

	<!--<div style="position: absolute;top: 5px;left:5px;width: 130px;height: 130px;">
		<img src="images/Pizza.jpg" style="position: absolute;top: 5px;left:5px;width: 130px;height: 130px;"> 
		
	</div>-->
	<div style="position: absolute;top: 50px;left: 500px;color: white;font-size: 40pt;">
		Guardian Login
	</div>
	
</div>
<div style="position: absolute;top: 150px;left: 0px;width: 1368px;height: 50px;background-color: #14E288;">
	<table  width="1368px" height=50px class="mydes">
		<tr align="center" style="font-family:  Helvetica;font-weight: bold;
">
			<td><div onclick="show('fxyz/attendence.php')">Attendence</div></td>
			<td><div onclick="show('fxyz/result.php')">Result</div></td>
			<td><div onclick="show('fxyz/profile.php')">Profile</div></td>
		</tr>
	</table>
</div>
<div id="abc" style="position: absolute;left: 0px;top: 200px;width: 1368px;height: 600px;background: url('education.jpg');">
	
</div>
</body>
</html>