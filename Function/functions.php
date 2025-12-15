
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

        $name = "pratik";
        say_hello2($name);

        function say_hello3($gretting,$target,$punctuation){
            echo $gretting . "," . $target . ",". $punctuation . "<br />";
        }
        say_hello3("hello",$name,"!");
   ?>
<br />
<?php
    function addition($val1,$val2){
        $sum = $val1 + $val2;
        echo addition(3,4);
    }
?>
</body>
</html>