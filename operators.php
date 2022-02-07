<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>
    <?php

    // 1. Equal
    $x = 100;
    $y = "100";
    $z = 300;
    echo "Is number 100 equal to the string 100?       ";
    var_dump($x == $y);
    echo "<br>";
    // 2. Identical
    echo "Is number 100 identical to the string 100?       ";
    var_dump($x === $y);
    echo "<br>";

    // 3.Not Equal
    echo "Is #100 not equal to string 100?   ";
    var_dump($x != $y);
    echo "<br>";
    echo "Is #100 not equal to #300?   ";
    var_dump($x <> $z);
    echo "<br>";


    // 5.Not identical
    echo "Is number 100 identical to the string 100?       ";
    var_dump($x !== $y);
    echo "<br>";

    // 6.Greater than 
    echo "Is #100 greater than #300?       ";
    var_dump($x > $z);
    echo "<br>";

    // 7.Less than
    echo "Is #100 less than #200?       ";
    var_dump($x < $z);
    echo "<br>";


    // 8.Increment
    $i = ++$x;
    echo $i;
    echo "<br>";
    // 9.Decrement
    $d = --$z;
    echo $d;
    echo "<br>";


    // 10. Post Increment
    $p = $d++;
    echo $p;

    // echo $p;
    // echo $d;


    ?>

</body>

</html>