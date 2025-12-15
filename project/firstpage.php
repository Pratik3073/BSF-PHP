<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
</head>

<body>
    <?php
    $linktext = "<Click> & you see";
    ?>
    <a href="secondpage.php?name=<?php echo urlencode('pratik&'); ?>&id=45">
        <?php echo htmlspecialchars($linktext); ?>
    </a>
</body>

</html>