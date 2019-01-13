<?php
$ename=$_POST['email'];
 if (preg_match('/^[@]+$/', $ename)==true && trim($ename) == '' && strlen($ename) > 20 && $ename.startsWith("1234",1) != true && $ename.endsWith(".com",20)==true )
{
 echo "Your Email Address is valid".$ename;
 }




?>