
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Loops : Continue</title>
</head>
<body>
   <?php
        for($count = 0;$count <=10 ;$count++){
            if($count == 5){
                continue; // if you get 5 jump out off the loop
            }
            echo $count.",";
            
        }
   ?>
</body>
</html>