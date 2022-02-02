<?php

// 1. While loop
/*
$num = 6;

while ($num <= 10) {
    echo "The number is $num <br> ";
    $num++;
}
*/


// Exercise from 50 count by increment of 5 + Count exercise 
// .while
echo "<h3>While loop</h3> <hr>";
$x = 50;
while ($x <= 100) {
    echo "The number is: $x <br> ";
    $x += 5;
}
// .do .. while
echo "<h3>do ...while loop</h3> <hr>";
$y = 30;
do {
    echo "The number is: $y <br>";
    $y += 6;
} while ($y <= 60);
// .switch
echo "<h3>Switch statement for random car type</h3> <hr>";
$mycars = array("limousine", "convertible", "minivan", "pickup", "sports car", "Formula1 car", "sedan");
$mycar = $mycars[mt_rand(0, 6)];
switch ($mycar) {
    case 'limousine':
        echo "You have a $mycar , keep the drinks coming🍾";
        break;
    case "convertible":
        echo "You have a $mycar , how's the ozone looking😉";
        break;
    case 'minivan':
        echo "You have a $mycar , must be comfortable";
        break;
    case 'pickup':
        echo "You have a $mycar , you're changing the world one cargo at a time😏";
        break;
    case 'sports car':
        echo "You have a $mycar , how is high speeds treating you";
        break;
    case 'Formula1 car':
        echo "You have a $mycar , when's you funeral 💀";
        break;
    case 'sedan':
        echo "You have a $mycar , awesome car";
        break;
    default:
        echo "You have no car, keep grinding💪🏽";
}
// echo "<br>" . $mycar;


// 2. do ... while loop
/*
$num2 = 11;

do {
    echo "The number is $num2 <br>";
    $num++;
} while ($num2 <= 17);
*/

// 3. for loop