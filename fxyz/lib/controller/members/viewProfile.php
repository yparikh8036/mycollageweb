
<?php
	include("../dbConfig.php");

	$uid = $_SESSION['uid'];

	$query = mysql_query("Select firstName,lastName,username,mobile,email From members Where id = '$uid'");
	$result = mysql_fetch_assoc($query);

?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="../../css/title.css">
		<link rel="stylesheet" type="text/css" href="../../css/viewProfile.css">
	</head>
	<body>
		<div class="title">View Profile</div>
		<div class="infoContainer">
			
			 <div class="userName">
				 <?php echo ucfirst($result['firstName'])." ".ucfirst($result['lastName']); ?>
				
			</div>
			<div class="info" style="">
				<hr>
				<div class="label">Id</div>
				<div class="details"><?php echo $uid; ?></div>
				<hr>
				<div class="label">Username</div>
				<div class="details"><?php echo ucfirst($result['username']); ?></div>
				<hr>
				<div class="label">Mobile</div>
				<div class="details"><?php echo $result['mobile']; ?></div>
				<hr>
				<div class="label">Email</div>
				<div class="details"><?php echo ucfirst($result['email']); ?></div>
				<hr>
			</div>
		</div>
	</body>
</html>