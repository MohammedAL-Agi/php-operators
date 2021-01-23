<?php
echo "===========Q1===========";
echo "<br>";
$year = 2020;
if ($year % 4 == 0) {
	echo "$year is a leap year";
} else {
	echo "$year is Not a leap year";
}
echo "<br>";
echo "===========Q2===========";
echo "<br>";
$teperature = 20;
if ($teperature < 20) {
	echo 'We are in winter';
} else {
	echo 'We are in summer';
}
echo "<br>";
echo "===========Q3===========";
echo "<br>";
$a = 2;
$b = 2;
if ($a == $b) {
	echo ($a + $b) * 3;
} else {
	echo $a + $b;
}
echo "<br>";
echo "===========Q4===========";
echo "<br>";
$n = 200;
$a = abs($n - 100);

if ($n > 100) {
	echo 3 * $a;
} else {
	echo $a;
}

echo "<br>";
echo "===========Q5===========";
echo "<br>";

$x = 28;
$y = 2;

if ($x == 30 || $x + $y == 30) {
	echo 'true';
} elseif ($y == 30) {
	echo 'true';
} else {
	echo 'wrong';
}
echo "<br>";
echo "===========Q6===========";
echo "<br>";
$a = 50;
if (abs($a - 100) <= 10 || abs($a - 200)) {
	echo "that's right";
}
echo "<br>";
echo "===========Q7===========";
echo "<br>";

$num = 10;

if ($a % 3 == 0 || $a % 7 == 0) {
	echo "It is";
} else {
	echo "It is not";
}
echo "<br>";

echo "===========Q8===========";
echo "<br>";
$str1 = "I love football";
function Change($str1)
{
	$arr1 = explode(" ", $str1);
	if ("if" === $arr1[0]) {
		echo "{$str1}.<br>";
	} else {
		array_unshift($arr1, "if");
		echo implode(" ", $arr1) . "<br>";
	}
}
Change($str1);

echo "===========Q9===========";
echo "<br>";
$str = "Hi Mohammed";
$str1 = substr($str, 0, 9);
$str2 = substr($str, 10, 7);
echo $str1 . $str2;

echo "<br>";
echo "===========Q10===========";
echo "<br>";
$x = 10;
$y = 100;
if ($x >= 100 && $x <= 200 || $y >= 100 && $y <= 200) {
	echo 'The entered numbers are from the range 100..200';
} else {
	echo 'The entered numbers are not from the range';
}
echo "<br>";
echo "===========Q11===========";
echo "<br>";
$x = 15;
$y = 100;
if ($x >= 20 && $x <= 50 || $y >= 20 && $y <= 50) {
	echo 'The entered numbers are from the range 20..50';
} else {
	echo 'The entered numbers are not from the range';
}
echo "<br>";
echo "===========Q12===========";
echo "<br>";
function checkLarg($x, $y, $z)
{
	$largest = max($x, max($y, $z));
	return $largest;
}
echo checkLarg(500, 100, 15);
echo "<br>";
echo "===========Q13===========";
echo "<br>";
$a = 95;
$b = 65;
$t1 = 100 - $a;
$t2 = 100 - $b;

if ($t1 < $t2) {
	echo $a . ' is closer to 100 ';
} elseif ($a == $b) {
	echo 0;
} else {
	echo $b . ' is closer to 100';
}
echo "<br>";
echo "===========Q14===========";
echo "<br>";

function integer($a, $b)
{
	if ($a == 5 || $b == 5) {
		echo 5;
	} elseif ($a + $b == 5) {
		echo $a + $b;
	} elseif ($a - $b == 5) {
		echo $a - $b;
	} else {
		echo ' none of them is 5, their sum = 5, or difference between them is 5.';
	}
}
integer(30, 25);
