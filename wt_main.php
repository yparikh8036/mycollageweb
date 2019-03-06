<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="myproject.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Welcome To Svit</title>
	<style type="text/css">
					
	</style>
	<script type="text/javascript">
		
		function change1(a,b){
		a.bgColor=b;
		}

		function change2(a){
		a.bgColor='';
		}

	</script>
</head>
<body style="background-image:url('education.jpg'); background-size: cover;">
	<?php 
	 if (!isset($_REQUEST['sub']))
	 {
	?>
	
<div style="  position: absolute; font-family: Helvetica;top:50px;height: 80px;left: 50px; width: 650px; ">
	<font style="font-size: 35pt; color: white; cursor: pointer;font-variant:small-caps;">Sardar Vallabhbhai patel <br>Institute Of Technology<span style="font-variant:small-caps;">-vasad</span></font>
</div>
<div style="position: absolute;top: 50px;right: 10px;width: 450px;">
	<div class="menu">
		<a href="wt_home.php"><div class="btn"><i class="fa fa-home" aria-hidden="true" ></i>HOME</div></a>
		<a href="wt_aboutus.php"><div class="btn"><i class="fa fa-user" aria-hidden="true"></i>ABOUT US</div></a>
		<a href="wt_contact.php"><div class="btn"><i class="fa fa-envelope" aria-hidden="true"></i>CONTACT US</div></a>
	</div>
	<!--<table cellspacing="20px" cellspacing="30px" style="font-family: Helvetica;color: white; cursor: pointer;">
		<tr>
			<td onmouseover="change1(this,'#14E2D9')" onmouseout="change2(this)"><div>HOME</div></td>
			<td onmouseover="change1(this,'#14E2D9')" onmouseout="change2(this)"><div>ABOUT US</div></td>
			<td onmouseover="change1(this,'#14E2D9')" onmouseout="change2(this)"><div>ACADEMICS</div></td>
			<td onmouseover="change1(this,'#14E2D9')" onmouseout="change2(this)"><div>Contact US</div></td>
		</tr>
	</table>-->
</div>
<div style="position: absolute;top: 43%;left: 20%;">
	<font style="font-size: 30pt; color: white; font-variant:small-caps; font-family:Helvetica ">
		Welcome to Svit. <br>To get Started you have to login first.
	</font>

	<form name="f1" style="font-family:Helvetica; color: white;" action="<?php $_SERVER['PHP_SELF'];?>">
		<div style="cursor: pointer;">
			Select login Options: <select  name="login">
			<option value="student">STUDENT</option>
			<option value="faculty">FACULTY</option>
			<option value="guardian">GUARDIAN</option>
		</select></div><br>
		<label> <input type="text" name="tun" placeholder="USERNAME"> </label>
		<label> <input type="PASSWORD" name="tpa" placeholder="PASSWORD"></label><br><br>
		<input class="but" type="submit" name="sub" value="SUBMIT">
		<input class="but" type="reset" name="res" value="CANCEL"><br><br>
		<input type="checkbox" name="tch">Keep Me Loged In.
	</form>
	<a href="wt_register.php">Create a new Account</a>	
</div>
<?php
}
else
{

session_start();
$_SESSION['user']=$_REQUEST['tun'];
$us=$_REQUEST['tun'];
$pa=$_REQUEST['tpa'];
$sel=$_REQUEST['login'];
		$link=new mysqli("localhost","root","","wtpro");
		$res=$link->query("select * from members where una='$us' and pass='$pa'");
		if($res->num_rows > 0)
		{
			if($sel=="student")
			{
			header("location:wt_student.php");	
			}
			elseif ($sel=="faculty") {
				//session_start();
			//	$_SESSION['fac']=$us;
			header("location:wt_faculty.php");

			}
			elseif ($sel=="guardian") {
			header("location:wt_guardian.php");
			}
			
		}
		else
		{
			header("location:wt_main.php");
		}
		$link->close();
	}
?>
</body>
</html>