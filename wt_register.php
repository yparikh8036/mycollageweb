<?php
	if (!isset($_REQUEST['addMemberBtn'])) 
	{
?>


<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="title.css">
		<link rel="stylesheet" type="text/css" href="register.css">
	</head>
	<body style="background-image: url('education.jpg');">
		<div class="title">Register</div>
		<div class="addMemberForm">
			<form action="<?php $_SERVER['PHP_SELF']  ?>"  class="addform">

				

				<div class="inputs">
					<input type="text" name="firstName" required autofocus placeholder="First-Name">
				</div>

				<div class="inputs">
					<input type="text" name="lastName" required autofocus placeholder="Last-Name">
				</div>

				<div class="inputs">
					<input type="text" name="username" required autofocus placeholder="Username">
				</div>

				<div class="inputs">
					<input type="password" name="pwd" required autofocus placeholder="Password">
				</div>

				<div class="inputs">
					<div class="addMemberFormList">
						<select name="position" required autofocus>
							<option value="">Select</option>
							<option value="Student">Student</option>
							<option value="Faculty">Faculty</option>
							<option value="Guardian">Guardian</option>

						</select>
					</div>
				</div>

				<div class="inputs">
					<input type="text" name="mobile" required autofocus placeholder="Mobile" pattern="[0-9]{10}">
				</div>

				<div class="inputs">
					<input type="email" name="email" required autofocus placeholder="Email">
				</div>

				<br><br><br>

				<input type="submit" name="addMemberBtn" value="Add Member">
			</form>
		</div>
<?php 
}
else{
		 				$link = new mysqli("localhost","root","","wtpro");
						$res=$link->query("Select Max(id) From members");
						$row=mysqli_fetch_row($res);
						$id=$row[0];
						$id++;
                        $firstName = $_REQUEST['firstName'];
                        $lastName = $_REQUEST['lastName'];
                        $username = $_REQUEST['username'];
                        $pwd = $_REQUEST['pwd'];
                        $position = $_REQUEST['position'];
                        $mobile = $_REQUEST['mobile'];
						$email = $_REQUEST['email'];
						$link->query("Insert Into members Values($id,'$firstName','$lastName','$username','$pwd','$position','$mobile','$email')");
						$link->close();
						header("location:wt_main.php");
	}
		?>
	</body>
</html>