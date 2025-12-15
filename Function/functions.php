
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
            return true;
        }
        say_hello3("hello",$name,"!");
   ?>
<br />

<?php
    function addition($val1,$val2){
        $sum = $val1 + $val2;
        return $sum; 
    }
     $new_val = addition(3,4);
     echo $new_val;

     if(addition(5,6)==11){
    echo "yes";    
    }
    function add_sub($val1,$val2){
        $add = $val1 + $val2;
        $sub = $val1 - $val2;
        $result = array($add,$sub);
        return $result; 
    }
    $result_array = add_sub(10,5);
    echo "Add:".$result_array[0];
    echo "SUB:".$result_array[1];
?>



</body>
</html>