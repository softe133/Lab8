<?php
$email=$_POST['email'];
 echo "<b>Email Checker</b><br>";
echo "<br>Email: ".$email;

function endsWith($email, $endString){
	$len=strlen($endString);
	if($len==0){
		return true;
	}
	return (substr($email, -$len)===$endString);
}

$start=0;
$end=0;
if(is_numeric($email[0])==1){
$start=1;
}
if(endsWith($email,'.com')){
	$end=1;
}
if(endsWith($email,'.edu.pk')){
	$end=1;
}
if(endsWith($email,'.co.uk')){
	$end=1;
}

if(substr_count($email, "@")==1 && strlen($email)<20 && preg_match('/\s/',$email)==0 && $start==0 &&  $end==1){
	echo "<br>This Email is Valid";
}
else{
	echo "<br>This Email is invalid";
}


?>