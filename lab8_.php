<?php

echo("<br>"."----------------FirstWAy = -----------------"."<br>");

function oneway($a=0,$b=0,$c=0){

$num = $a+$b+$c;

echo($num);

}

oneway(8,9);
oneway(8,9,5);

echo("<br>"."----------------SecondWAy = -----------------"."<br>");

function secondway(... $a){
	foreach ($a as $v) {
		echo($v);
	}
}

secondway(8,9,0,6,5,4);

echo("<br>"."----------------ThirdWAy = -----------------"."<br>");

function test3(){

	if(func_num_args()==0){
		echo("No arguments"."<br>");
	}

	elseif(func_num_args()==1){
		echo("One argument"."<br>");
	}

	elseif(func_num_args()==2){
		echo("Two arguments"."<br>");
	}
}

test3(8080,9090);
test3(8080);
test3();
?>