<?php

function factorial($num=0){

	$factorial=1;

	for( $i=$num; $i>=1; $i--){
	$factorial = $factorial*$i;
	}

	echo("Factorial of number is:".$factorial);
}
factorial(8);


echo("<br>"."----------------new task-----------------"."<br>");

function exponent($base,$power){

		$rslt= $base**$power;
		echo("Exponent of number ".$base." is: ".$rslt);

}

exponent(2,4);


echo("<br>"."----------------Function Overloading-----------------"."<br>");

function addition($a=0,$b=0,$c=0){

	$rslt=$a+$b+$c;

	echo("Addition is: ".$rslt);
}

addition(4,5,7);
addition(5,7);
addition(4);

function subtraction($a=0,$b=0,$c=0){

	$rslt=$a-$b-$c;

	echo("Subtraction is: ".$rslt);
}

subtraction(10,-5,7);
subtraction(-11,7);
subtraction(-9);

function multiplication($a=1,$b=1,$c=1){

	$rslt=$a*$b*$c;

	echo("multiplication is: ".$rslt);
}

multiplication(3,4,-2);
multiplication(6,-4);
multiplication(23);

function division($a=1,$b=1,$c=1){

	$div=$a/($b*$c);

	echo("Division is: ".$div);
}

division(8,2,-2);
division(36,-6);
division(8);


echo("<br>"."----------------Armstrong-----------------"."<br>");

function armstrong($num){

$sum=0;  
$x=$num; 
$bool=false;
while($x!=0)  
{  
$rem=$x%10;  
$sum=$sum+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$sum)  
{  
$bool=true;
echo($bool);  
}  
else  
{  
$bool=false;
echo($bool);  
} 

}

armstrong(153);
armstrong(84);

echo("<br>"."----------------NumberToWords-----------------"."<br>");

function num_to_words($num){
$arr = str_split($num);

foreach($arr as $val){

switch($val){

	case 0:
	echo("zero");
	break;

	case 1:
	echo("one");
	break;

	case 2:
	echo("two");
	break;

	case 3:
	echo("three");
	break;

	case 4:
	echo("four");
	break;

	case 5:
	echo("five");
	break;

	case 6:
	echo("six");
	break;

	case 7:
	echo("seven");
	break;

	case 8:
	echo("eight");
	break;

	case 9:
	echo("nine");
	break;
}
}

}

num_to_words(987650);

?>
