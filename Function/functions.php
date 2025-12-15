
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
   <?php
        function say_hello(){
            echo "Hello world!<br /> ";
        }
        say_hello();
   ?>
   
   <?php
        function say_hello2($world){
            echo "Hello {$world}!<br /> ";
        }
        say_hello2("world");
        say_hello2("everyone");
   ?>

</body>
</html>