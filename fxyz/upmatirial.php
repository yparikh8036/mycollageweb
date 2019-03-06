<?php
echo "File is uploaded<br>";
echo "File Info";
$name=$_FILES['u']['name'];

$size=$_FILES['u']['size'];
$type=$_FILES['u']['type'];
$tmp_name=$_FILES['u']['tmp_name'];

echo "<br>".$name."<br>   ".$size."<br>   ".$type."  <br> ".$tmp_name;

if(isset($name))
{
	if(!empty($name)){
	echo "ok";
	$location="matirial/";
move_uploaded_file($tmp_name,$location.$name);
}
	else{
		echo "Plz cheak file";
	}
}
?>