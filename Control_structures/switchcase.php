
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
   <?php $a = 3; ?>
   <?php 
    switch($a){
        case 0:
            echo "a equals 0 ";
            break;
        case 1:
            echo "a is 1";
            break;
        case 2:
            echo "a is 2";
            break;
        default:
            echo "a is not 0,1or 2";
            break;
    }
   ?>
</body>
</html>