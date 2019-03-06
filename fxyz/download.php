<?php
session_start();
$filee=$_SESSION['file1'];
echo "string";
$file_url="C:/wamp/www/Aa project/ishrar project/fxyz/result/".$filee;
echo $file_url;
header('Content-Type :application/octestream');
header("Content-Transfer-Encoding: utf-8");
header("Content-disposition:attachment;filename=.$filee.".basename($file_url)."\"");


readfile("$file_url");


?>