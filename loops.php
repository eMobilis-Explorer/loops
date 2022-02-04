<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped&family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Learning Loops</title>
</head>

<body>
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
    echo "<h3 class='myheadings'>While loop</h3> ";
    $x = 50;
    while ($x <= 100) {
        echo "<p class = 'mystyles'>The number is: $x </p> ";
        $x += 5;
    }
    // .do .. while
    echo "<h3 class ='myheadings'>do ...while loop</h3>";
    $y = 30;
    do {
        echo "<p class='mystyles'>The number is: $y </p>";
        $y += 6;
    } while ($y <= 60);
    // .switch
    echo "<h3 class = 'myheadings'>Switch statement for random car type</h3>  ";

    // ADD CARS HERE 
    $mycars = array("limousine", "convertible", "minivan", "pickup", "sports car", "Formula1 car", "sedan", "landrover defender", "probox", "nduthi", "peugeout", "mazda", "jeep");

    // ADD the length or random numbers according to the cars added
    $mycar = $mycars[mt_rand(0, count($mycars))];
    switch ($mycar) {
        case 'limousine':
            echo "<p class='mystyles car'>You have a $mycar , keep the drinks coming🍾</p>";
            break;
        case "convertible":
            echo "<p class='mystyles car'>You have a $mycar , how's the ozone looking😉</p>";
            break;
        case 'minivan':
            echo "<p class='mystyles car'>You have a $mycar , must be comfortable</p>";
            break;
        case 'pickup':
            echo "<p class='mystyles car'>You have a $mycar , you're changing the world one cargo at a time😏</p>";
            break;
        case 'sports car':
            echo "<p class='mystyles car'>You have a $mycar , how is high speeds treating you</p>";
            break;
        case 'Formula1 car':
            echo "<p class='mystyles car'>You have a $mycar , when's you funeral 💀</p>";
            break;
        case 'sedan':
            echo "<p class='mystyles car'>You have a $mycar , awesome car</p>";
            break;
            // Kibi's cases
        case 'landrover defender':
            echo "<p class='mystyles car'>You have a $mycar , how is the rough terrain</p>";
            break;
        case 'probox':
            echo "<p class='mystyles car'>You have a $mycar , how many you carrying😂</p>";
            break;
        case 'nduthi':
            echo "<p class='mystyles car'>You have a $mycar , nduthi ya kubeba mbanana</p>";
            break;
        case 'peugeout':
            echo "<p class='mystyles car'>You have a $mycar , how expensive is gas?</p>";
            break;
            // Add your cases here(thanks)
        default:
            echo "<p class='mystyles car'>You have no car, keep grinding💪🏽</p>";
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
    echo "<h3 class = 'myheadings'>For loop</h3> ";
    for ($i = 10; $i >= 1; $i--) {
        echo "<p class = 'mystyles'>I am number $i </p>";
    }

    // 4.foreach loop
    echo "<h3 class = 'myheadings'>For each loop</h3>";
    foreach ($mycars as $car) {
        echo "<p class = 'mystyles'>$car </p>";
    }
    // foreach ($variable as $key => $value) {
    //     # code...
    // }
    ?>

</body>

</html>