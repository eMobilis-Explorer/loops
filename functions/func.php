<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped&family=Comforter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles.css">
    <title>Functions</title>
</head>

<body>
    <?php

    function afconFinal($year, $fteam, $steam, $winner)
    {
        echo "<h2 class='mystyles afconh2'>AFCON $year</h2>";
        echo "<p class='mystyles afcon'>The AFCON final was played between <span>$fteam vs $steam</span>.</p>";
        echo "<p class= 'mystyles afcon winner'> The winner of the $year AFCON was <span>$winner</span></p>";
    }


    afconFinal("2008", "Kenya", "Cameroon", "Cameroon");
    afconFinal("2022", "Senegal", "Egypt", "Senegal");
    afconFinal("2021", "Kenya", "Egypt", "Kenya");
    afconFinal("2018", "Kenya", "Cape Verde", "Madagascar");

    ?>
</body>

</html>