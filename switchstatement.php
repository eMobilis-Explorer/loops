<?php

$myfruits = array("Mangoes", "Oranges", "Water Melon", "Banana");
$myfruit = $myfruits[mt_rand(0, 3)];
switch ($myfruit) {
    case 'Oranges':
        echo "I have oranges";
        break;
    case "Water Melon":
        echo "I have watermelon";
        break;
    case 'Bananas':
        echo "I have bananas";
        break;
    case 'Mangoes':
        echo "I have mangoes";
        break;
    default:
        echo "I have no fruits";
}

echo "<br>";
