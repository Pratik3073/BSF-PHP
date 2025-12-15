<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>

<body>
    <?php
    //include("included_func.php");
        require("included_func.php");// if file not load it throw the error
        require_once("included_func.php"); // Loads included_func.php and prevents multiple inclusions

    ?>
    <?php
         hello("everyone");
    ?>
</body>

</html>