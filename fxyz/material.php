<?php
$resourse=opendir("matirial/");
 echo "<table border='5' class='mytab'>";
 session_start();

while (($entry= readdir($resourse)) !== FALSE) {
	if($entry != '.' && $entry !='..'){
echo "<tr><td>" .$entry." </td><td><a href='download.php'>Download</a></td></tr>";
$_SESSION['file']=$entry;
}
	
}
echo "</table>";

?>



<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.mytab
{
position:absolute;
top:10%;
left: 35%;
/*margin-right: 150px;
margin-top: 100px;
*/font-size: 25px;
font-weight: 100;
//background-color: white;
}
	</style>
	<title></title>
</head>
<body>
	
</body>
</html>