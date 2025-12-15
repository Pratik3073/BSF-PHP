<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String functions</title>
</head>
<>
    <?php
    $firstString = "the quick brown fox";
    $secondString = "jumped over the lazy dog";
    ?>
    <?php
    $thirdSring = $firstString;
    $thirdSring .= $secondString;
    echo $thirdSring
        ?>
    Lowercase :<?php echo strtolower($thirdSring); ?> <br />
    uppercase :<?php echo strtoupper($thirdSring); ?> <br />
    Lowercase first-letter:<?php echo ucfirst($thirdSring); ?> <br />
    Lowercase words:<?php echo ucwords($thirdSring); ?> <br />
    <br />
    length : <?php echo strlen($thirdSring) ?><br />
    trim: <?php echo $fourthString = $firstString . trim($secondString) ?><br />
    find: <?php echo strstr($thirdSring, "brown") ?><br />
    replace by string:<?php echo str_replace("quick", "super-fast", $thirdSring); ?>



    </body>

</html>