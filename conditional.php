<?php

//1. If statement
echo "<h3>If statements</h3>";
$num = 30;
if ($num > 20) {
    echo "Yeah I'm freaking great";
}

echo "<br>";

echo "<h3>If ...else statements</h3>";


//2. If .... else
$num1 = 22;
$num2 = 12;
if ($num1 <= $num2) {
    echo "It's true";
} else {
    echo "It's false";
}
echo "<br>";

//3. If ....elseif ..... else statement
// 1. Date logic to handle times of day
echo "<h3>If ...elseif .... else statements</h3>";
$massaa = date("H");
if ($massaa <= "9") {
    echo "Its to early ";
} elseif ($massaa >= "22") {
    echo "Go to sleep";
} else {
    echo "It's time to work";
}
echo "<br>";
$massaa = date("h:i:sa");
echo $massaa;


// 2. Grading logic
echo "<h4>What's your grade</h4>";
$grade = 102;
if ($grade <= 39 && $grade > 0) {
    echo "You have failed";
} elseif ($grade <= 59 and $grade >= 40) {
    echo "That's a pass";
} elseif ($grade <= 79 && $grade >= 60) {
    echo "That's credit";
} elseif ($grade > 100 || $grade < 0) {
    echo "Input a valid grade";
} elseif ($grade >= 80) {
    echo "That's a distinction";
} else {
    echo "Your grade is " . $grade;
}
echo "<br>";


$x = 50;
while ($x <= 100) {
    echo "The number is: $x <br> ";
    $x += 5;
}
// .do .. while
$y = 30;
do {
    echo "The number is: $y <br>";
    $num += 6;
} while ($y <= 60);
