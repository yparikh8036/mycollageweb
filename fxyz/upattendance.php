<?php
$tw=$_REQUEST['tw'];
//echo $tw;
//$fid=$_REQUEST['fid'];
// $a=array();
// for($i=1;$i<=10;$i++){
// $a[$i]=$_REQUEST['t[$i]'];echo"<BR>";
// echo $a[$i];

// }
$t11=$_REQUEST['t11'];$t12=$_REQUEST['t12'];$t13=$_REQUEST['t13'];  
$t21=$_REQUEST['t21'];$t22=$_REQUEST['t22'];$t23=$_REQUEST['t23']; 
$t31=$_REQUEST['t31'];$t32=$_REQUEST['t32'];$t33=$_REQUEST['t33']; 
$t41=$_REQUEST['t41'];$t42=$_REQUEST['t42'];$t43=$_REQUEST['t43']; 
$t51=$_REQUEST['t51'];$t52=$_REQUEST['t52'];$t53=$_REQUEST['t53']; 
$t61=$_REQUEST['t61'];$t62=$_REQUEST['t62'];$t63=$_REQUEST['t63']; 
$t71=$_REQUEST['t71'];$t72=$_REQUEST['t72'];$t73=$_REQUEST['t73']; 
$t81=$_REQUEST['t81'];$t82=$_REQUEST['t82'];$t83=$_REQUEST['t83']; 
$t91=$_REQUEST['t91'];$t92=$_REQUEST['t92'];$t93=$_REQUEST['t93']; 
$t101=$_REQUEST['t101'];$t102=$_REQUEST['t102'];$t103=$_REQUEST['t103']; 
//echo "".$t11."<br>". $t12;
//session_start();
//$uf=$_SESSION['fac'];
//$str="insert into atten values($tw,'$fid',$t1,$t2,$t3,$t4,$t5,$t6,$t7,$t8,$t9,$t10)";
$link=new mysqli("localhost","root","","wtpro");
$link->query("insert into att values($tw,'s1',$t11,$t12,$t13)");
$link->query("insert into att values($tw,'s2',$t21,$t22,$t23)");
$link->query("insert into att values($tw,'s3',$t31,$t32,$t33)");
$link->query("insert into att values($tw,'s4',$t41,$t42,$t43)");
$link->query("insert into att values($tw,'s5',$t51,$t52,$t53)");
$link->query("insert into att values($tw,'s6',$t61,$t62,$t63)");
$link->query("insert into att values($tw,'s7',$t71,$t72,$t73)");
$link->query("insert into att values($tw,'s8',$t81,$t82,$t83)");
$link->query("insert into att values($tw,'s9',$t91,$t92,$t93)");
$link->query("insert into att values($tw,'s10',$t101,$t102,$t103)");

header("location:uattendance.php")


?>